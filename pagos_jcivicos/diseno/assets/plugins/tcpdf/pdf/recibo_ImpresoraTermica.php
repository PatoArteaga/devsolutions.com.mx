<?php

//setlocale(LC_ALL, 'es_MX.UTF-8');
//setlocale(LC_ALL, 'es_MX');

date_default_timezone_set('America/Mexico_City');


require_once "../../../controladores/usuarios.controlador.php";
require_once "../../../modelos/usuarios.modelo.php";

require_once "../../../controladores/padrontitulos.controlador.php";
require_once "../../../modelos/padrontitulos.modelo.php";

require_once "../../../controladores/cobranza.controlador.php";
require_once "../../../modelos/cobranza.modelo.php";

require_once "../../../controladores/configuracion.controlador.php";
require_once "../../../modelos/configuracion.modelo.php";


class imprimirFactura{

public $curp;
public $foliorecibo;
public $pdescuento;

public function traerImpresionFactura(){

//TRAEMOS LA INFORMACIÓN DE LA VENTA

$itemCurp = "curp";
//$itemfoliorecibo = "foliorecibo";

$curpValor = $this->curp;
//$pdescuento = $this->descuento;
$itemfolioreciboValor = $this->foliorecibo;


$curp = $_GET['curp'];
$folio  = $_GET['foliorecibo'];
$pdescuento = $_GET['descuento'];



$precioTotal = 0.00;

$respuestaRecibo = ControladorCobranza::ctrMostrarCobranzaRecibos($curp, $folio);


$folioinc =  ModeloConfiguracion::mdlEditarRecibo();

if ($folioinc == 'ok'){
    
    $foliomaxint = ModeloConfiguracion::mdlMaxRecibo();
    $folioinc = $foliomaxint["maxfolio"];
} 


require_once('tcpdf_include.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->AddPage('P', 'A7');

$fecha = date('d-m-Y H:i:s');

//---------------------------------------------------------

$bloque1 = <<<EOF

<table table style="font-size:8px; text-align:center">
  <tr>
		
		<td style="width:160px;">
	
			<div>
			
				Fecha: $fecha
				<br>
        Folio: .$folio
				<br>
				Municipio de Zitácuaro, Michoacán.
				<br>
				Juzgados Cívicos
				<br>
				Dirección: Calle Ocampo poniente # 13
				<br>
				Teléfono: 7151531147
				<br>
				CURP:.$curpValor
				<br><br>					
			
		
			</div>

		</td>

	</tr>
</table>

<table style="font-size:8px; text-align:center">
	<thead>
               <tr>
                 <th>Sepulcro</th>
                 <th>Tarifa</th>
                 <th>Año</th>
                 <th>Subtotal</th>
               </tr> 
     </thead>

</table>
<br>


EOF;

$pdf->writeHTML($bloque1, false, false, false, false, '');

// ---------------------------------------------------------

$recargos = 0;
$gastosejecucion = 0;
$currentYear = number_format(date("Y"));

foreach ($respuestaRecibo as $key => $item) {

$subtotal = number_format($item["subtotal"], 2);
$aniofacturacion = number_format($item["aniomesdefacturacion"]);


if ($aniofacturacion < $currentYear) {
        //Recargos para el ejercicio actual

     if (number_format($pdescuento) > 0) {

     	  $recargos = $recargos + (($item["subtotal"] * 0.24) - (($item["subtotal"] * 0.24) * $pdescuento/100));
   
        //Gatos de ejecución
        $gastosejecucion =  $gastosejecucion + (($item["subtotal"] * 0.03) - (($item["subtotal"] * 0.03) * $pdescuento/100));

     }else{

     $recargos = $recargos +  ($item["subtotal"] * 0.24);
       //Gatos de ejecución
     $gastosejecucion =  $gastosejecucion + ($item["subtotal"] * 0.03);
     }
}   


$precioTotal = (float)$precioTotal + (float)$item["subtotal"];



$bloque2 = <<<EOF

	<table style="font-size:7px;">


		<tr>
		
			<td>$item[sepulcro]</td>
			<td>$item[descripcion]</td>
      <td>$item[aniomesdefacturacion]</td>
      <td align="right">$item[subtotal]</td>

		</tr>


	</table>

EOF;

$pdf->writeHTML($bloque2, false, false, false, false, '');

}

$gTotal  = ((float)$precioTotal + (float)$recargos + (float)$gastosejecucion);
$precioTotal = number_format($precioTotal, 2);
$recargos = number_format($recargos, 2);
$gastosejecucion = number_format($gastosejecucion, 2);
$gTotal  = number_format($gTotal , 2);


// ---------------------------------------------------------

$bloque3 = <<<EOF

<table style="font-size:8px; text-align:right">
	<tr>
		<td style="width:160px;"> --------------------------</td>
	</tr>
	<tr>
		<td style="width:80px;">SubTotal:</td>
		<td style="width:80px;">$ $precioTotal</td>
	</tr>
	<tr>
		<td style="width:80px;">Recargos:</td>
		<td style="width:80px;">$ $recargos</td>
	</tr>
  <tr>
		<td style="width:80px;">G.Ejecución:</td>
		<td style="width:80px;">$ $gastosejecucion</td>
	</tr>
    <tr>
		<td style="width:80px;">Total:</td>
		<td style="width:80px;">$ $gTotal</td>
	</tr>	

	<tr>
		<td style="width:160px;">
			<br>
			<br>
			Muchas gracias por su pago
		</td>

	</tr>

</table>



EOF;

$pdf->writeHTML($bloque3, false, false, false, false, '');

// ---------------------------------------------------------
//SALIDA DEL ARCHIVO 

$pdf->Output('recibo.pdf');





}

}

$factura = new imprimirFactura();
$factura -> curp = $_GET["curp"];
$factura -> traerImpresionFactura();

?>
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

require_once  "../../../funciones/numerosAletras.php";


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

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 11, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print

$fecha = date('d-m-Y H:i:s');

$bloque1 = <<<EOF

		

      <table>
      <br>
      <br>
	      <tr>
	         <td>
	           <div align="left">
	              <img src="images/escudo.jpg" style="width:40px">
	            </div>
	         </td>
	         <td>

                <br>
                <br>
             

	              <div align="center" style="font-size:10px">
	               Municipio de Zitácuaro, Michoacán
	              </div>



			          <div align="center" style="font-size:8px">     
			               Recibo de pago
			               <br>
			               Fecha: $fecha
						         <br>
		                 Folio: .$folio
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
	         <td>
	           <div align="rigth">
	              <img src="images/image_escudo_zit.jpg" style="width:70px">
	            </div>
	         </td>
	         

	       
	      </tr>


      </table>
      <br>
   


		<table style="font-size:8px; text-align:center">
			<thead>
		               <tr>
		                 <th>#Infracción</th>
		                 <th>Tarifa</th>
		                 <th>Año</th>
		                 <th>Subtotal</th>
		               </tr> 
		     </thead>

		</table>




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

	<table style="font-size:8px; text-align:center ">


		<tr>
		
			<td>$item[sepulcro]</td>
			<td>$item[descripcion]</td>
      <td>$item[aniomesdefacturacion]</td>
      <td>$item[subtotal]</td>

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


//La funcion numeroALetras cambia la cantidad decimal a letras

$var = (double)filter_var($gTotal, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

$letras = numtoletras($var);



$bloque3 = <<<EOF
  
  <table style="font-size:8px; text-align:rigth ">

   <tr>
      <td></td>

      <td>
        <table style="font-size:8px">
            <tr>
							<td style="width:217px;">------------------------------------------------------</td>
						</tr>

						<tr>
							<td style="width:107px;">SubTotal:</td>
							<td style="width:107px;">$ $precioTotal</td>
						</tr>
						<tr>
							<td style="width:107px;">Recargos:</td>
							<td style="width:107px;">$ $recargos</td>
						</tr>
					  <tr>
							<td style="width:107px;">G.Ejecución:</td>
							<td style="width:107px;">$ $gastosejecucion</td>
						</tr>
					    <tr>
							<td style="width:107px;">Total:</td>
							<td style="width:107px;">$ $gTotal</td>
						</tr>



        </table>


      </td>
   </tr>

  
	
	<tr>
	 	<td style="width:350px;">
	 	    <br>
	 	    <br>
			<br>
			   Total con letra: $letras
			<br>    
			<br>
			
			Muchas gracias por su pago

		</td>

	</tr>

  



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
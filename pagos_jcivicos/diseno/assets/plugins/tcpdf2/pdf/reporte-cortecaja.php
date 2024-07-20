<?php

require_once "../../../controladores/cortecaja.controlador.php";
require_once "../../../modelos/cortecaja.modelo.php";

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');


$fechainicial = $_GET['fechainicial'];
$fechafinal   = $_GET['fechafinal'];


$item  = "'".$fechainicial." 00:00:01"."'" ;
$item1 = "'".$fechafinal." 23:59:59"."'";


$valor = null;


$cortecaja = ControladorCorteCaja::ctrMostrarCorteCaja($item, $item1, $valor);


$sumtotal = ControladorCorteCaja::ctrSumarCorteCaja($item, $item1);
$sumtotalformat = number_format($sumtotal["total"], 2);


$fecha = date('d-m-Y H:i:s');

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

$bloque1 = <<<EOF
<div align="rigth">fecha de reporte: $fecha<br></div>

<img src="images/image_escudo_zit.jpg" style="width:70px">

  <div align="center">Municipio de Zitácuaro, Michoacán<br>Corte de caja
  </div>

  

<br>

EOF;

$pdf->writeHTML($bloque1, false, false, false, false, '');


$bloque2 = <<<EOF


  <table width="100%">
         
        <thead>
         
         <tr>
           
           <th width="12%">Folio</th>
           <th width="20%">CURP</th>
           <th width="16%">Fecha</th>
           <th width="10%">Subtotal</th>
           <th width="10%">Total</th>
           <th width="12%">Forma Pago</th>
           <th width="12%">Cajero</th>
           <th width="8%">Status</th>
   

         </tr> 

        </thead>
       <br>
      
</table> 

EOF;

$pdf->writeHTML($bloque2, false, false, false, false, '');

foreach ($cortecaja as $key => $item) {

$subtotalformat = number_format($item["subtotal"], 2);
$totalformat    = number_format($item["total"], 2);

$bloque3 = <<<EOF


<table style="font-size:7px;">


		<tr>
		
			      <td width="12%">$item[foliorecibo]</td>
            <td width="20%">$item[curp]</td>
			      <td width="16%">$item[fechahorapago]</td>
            <td width="10%" align="right">$subtotalformat</td>
            <td width="10%" align="right">$totalformat</td>
            <td width="12%">$item[tipopago]</td>
            <td width="12%">$item[idusuario]</td>
            <td width="8%">$item[status]</td>

       
		</tr>



	</table>

   
EOF;

$pdf->writeHTML($bloque3, false, false, false, false, '');


}

//Ejemplo de agredado de bloque 4
$bloque4 = <<<EOF

  
   <table style="font-size:7px;">


    <tr>
    
            <td width="12%"></td>
            <td width="20%"></td>
            <td width="16%" align="right">Total:</td>
            <td width="10%" align="right">$sumtotalformat</td>
            <td width="10%" align="right">$sumtotalformat</td>
            <td width="12%"></td>
            <td width="12%"></td>
            <td width="8%"></td>

       
    </tr>


  </table> 

EOF;
$pdf->writeHTML($bloque4, false, false, false, false, '');


// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('CortedeCaja.pdf', 'I');



//============================================================+
// END OF FILE
//============================================================+
 ?>
 
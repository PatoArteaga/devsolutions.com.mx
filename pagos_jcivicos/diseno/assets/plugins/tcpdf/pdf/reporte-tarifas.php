<?php


require_once "../../../controladores/tarifas.controlador.php";
require_once "../../../modelos/tarifas.modelo.php";

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');


$item = null;
$valor = null;
$item1 = null; 
$valor1 = null;


$tarifas = ControladorTarifas::ctrMostrarTarifas($item, $item1, $valor, $valor1);

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

  <div align="center">Municipio de Zitácuaro, Michoacán<br>Padrón de tarifas</div>
  

<br>

EOF;

$pdf->writeHTML($bloque1, false, false, false, false, '');


$bloque2 = <<<EOF


  <table width="100%">
         
        <thead>
         
         <tr>
           
           <th width="20%">Id Tarifa</th>
           <th width="50%">Descripción</th>
           <th width="30%">Costo</th>
           

         </tr> 

        </thead>
       <br>
      
</table> 

EOF;

$pdf->writeHTML($bloque2, false, false, false, false, '');

foreach ($tarifas as $key => $item) {

$costot = number_format($item["costotitulo"], 2, '.', '');


$bloque3 = <<<EOF

<table style="font-size:7px;">


		<tr>
		
			      <td width="20%">$item[idtarifa]</td>
			      <td width="50%">$item[descripcion]</td>
            <td width="30%" align="right">$costot</td>

          
		</tr>


	</table>

   
EOF;

$pdf->writeHTML($bloque3, false, false, false, false, '');

}

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('PadrondeTarifas.pdf', 'I');



//============================================================+
// END OF FILE
//============================================================+
 ?>
 
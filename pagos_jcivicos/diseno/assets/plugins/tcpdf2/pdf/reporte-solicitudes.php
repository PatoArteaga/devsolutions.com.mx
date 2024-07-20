<?php


require_once "../../../controladores/solicitudes.controlador.php";
require_once "../../../modelos/solicitudes.modelo.php";

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');


$item = null;
$valor = null;


$solicitantes = Controladorsolicitudes::ctrMostrarSolicitudes($item, $valor);

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

  <div align="center">Municipio de Zitácuaro, Michoacán<br>Padrón de usuarios</div>
  

<br>

EOF;

$pdf->writeHTML($bloque1, false, false, false, false, '');


$bloque2 = <<<EOF


  <table width="100%">
         
        <thead>
         
         <tr>
           
           <th width="20%">CURP</th>
           <th width="10%">Paterno</th>
           <th width="10%">Materno</th>
           <th width="15%">Nombre</th>
           <th width="10%">Folio</th>
           <th width="15%">Fecha Alta</th>
           <th width="20%">email</th>

         </tr> 

        </thead>
       <br>
      
</table> 

EOF;

$pdf->writeHTML($bloque2, false, false, false, false, '');

foreach ($solicitantes as $key => $item) {





$bloque3 = <<<EOF

<table style="font-size:7px;">


		<tr>
		
			      <td width="20%">$item[curp]</td>
			      <td width="10%">$item[paterno]</td>
            <td width="10%">$item[materno]</td>
            <td width="15%">$item[nombre]</td>
            <td width="10%">$item[folio]</td>
            <td width="15%">$item[fechadealta]</td>
            <td width="20%">$item[email]</td>

		</tr>


	</table>

   
EOF;

$pdf->writeHTML($bloque3, false, false, false, false, '');

}

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('pdf.pdf', 'I');



//============================================================+
// END OF FILE
//============================================================+
 ?>
 
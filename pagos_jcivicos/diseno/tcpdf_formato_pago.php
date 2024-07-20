<?php
    //require_once("../../config/conexion.php");
    //require_once("../../models/Menu.php");
    //$menu = new Menu();
    //$datos = $menu->get_menu();

    //require_once('../../public/assets/tcpdf/tcpdf_include.php');


    require_once("assets/plugins/tcpdf/tcpdf_include.php");
    
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Ayuntamiento de Zitacuaro');
    $pdf->SetTitle('PagosJuzgado Civico');

    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);

    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

    $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
        require_once(dirname(__FILE__) . '/lang/eng.php');
        $pdf->setLanguageArray($l);
    }

   

    $pdf->AddPage();

    $html = '
<style>
.p{}

<p style="text-align: center;"></p>
<table style="height: 46px; width: 200px;">
<tbody>
<tr style="height: 150px;">
<td style="width: 119.438px; height: 150px;"><img src="assets/imgs/coorp2018_2024.png" align="left" alt="" style="width: 120px; height: 130px; display: block; margin-left: auto; margin-right: auto;"/></td>
<td style="width: 775.562px; text-align: center; height: 150px;">
<h1><strong>FORMATO DE PAGO</strong></h1>
<h1><strong>JUZGADO CIVICO ZITACUARO MICHOACAN, MEX.</strong></h1>
</td>
<td style="width: 116px; height: 150px;"><img src="assets/imgs/coorp2018_2024.png" align="right" alt="" style="width: 120px; height: 130px; display: block; margin-left: auto; margin-right: auto;"/></td>
</tr>
</tbody>
</table>';

    
     /*       foreach ($datos as $row) {
                $html.= 
                '<tr>
                    <td>' . $row['men_id'] . '</td>
                    <td>' . $row['men_ruta'] . '</td>
                    <td>' . $row['men_icon'] . '</td>
                    <td>' . $row['men_nom'] . '</td>
                </tr>';
            }
*/








    $html.=' 
            </table>';

    $pdf->writeHTML($html, true, false, false, false, 'C');

    // move pointer to last page
    $pdf->lastPage();
    ob_end_clean();
    // ---------------------------------------------------------

    //Close and output PDF document
    $pdf->Output('PagoJuzgadoCivico.pdf', 'I');
?>
<?php
require_once('vendor/autoload.php');
use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

ob_start();
include 'html.php';
$content = ob_get_clean();

$html2pdf = new Html2Pdf('P', 'A3', 'fr', true);
$html2pdf->pdf->SetDisplayMode('fullpage');
$html2pdf->writeHTML($content);
$html2pdf->output('myPdf.pdf'); // Generate and load the PDF in the browser.

?>
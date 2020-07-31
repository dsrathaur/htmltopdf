<?php
require_once __DIR__ . '/vendor/autoload.php'; 

use Spipu\Html2Pdf\Html2Pdf;

/**/
$mailto       = 'dushyant.rathaur4078@gmail.com';
$mailfrom     = 'sales@highranksolution.com';
$mailsubject  = 'Invoice';
$firstname    = 'Dushyant';
$lastname     = 'Rathaur';
$description  = 'Nothing special...';

$description = wordwrap($description, 100, "<br />");
/* break description content every after 100 character. */

$content = '';

$content .= '
  <style>
  table {
  border-collapse: collapse;
  }
  table{
  width:800px;
  margin:0 auto;
  }
  td{
  border: 1px solid #e2e2e2;
  padding: 10px; 
  max-width:520px;
  word-wrap: break-word;
  }
  </style>';

  $content .= '<table>';

  $content .= '<tr><td>Mail To</td> <td>' . $mailto . '</td> </tr>';
  $content .= '<tr><td>Mail From</td>   <td>' . $mailfrom . '</td> </tr>';
  $content .= '<tr><td>Mail Subject</td>   <td>' . $mailsubject . '</td> </tr>';
  $content .= '<tr><td>Firstname</td>   <td>' . $firstname . '</td> </tr>';
  $content .= '<tr><td>Lastname</td>   <td>' . $lastname . '</td> </tr>';
  $content .= '<tr><td>Description</td>   <td>' . $description . '</td> </tr>';

  $content .= '</table>';


$html2pdf = new Html2Pdf('P', 'A4', 'fr');
$html2pdf->pdf->SetDisplayMode('fullpage');
$html2pdf->writeHTML($content);
$filename = "pdf-document.pdf";
$pdfdoc = $html2pdf->output($filename);
$attachment = chunk_split(base64_encode($pdfdoc));
echo $attachment;
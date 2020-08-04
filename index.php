<?php
require_once __DIR__ . '/vendor/autoload.php'; 

use Spipu\Html2Pdf\Html2Pdf;

$html = '<div class="invoice-box" style="margin: auto;padding: 30px;border: 1px solid #eee;box-shadow: 0 0 10px rgba(0, 0, 0, .15);font-size: 16px;line-height: 24px;color: #555;">
<table cellpadding="0" cellspacing="0" style="width: 100%;line-height: inherit;text-align: left;">
      <tbody><tr>
        <td class="title" style="padding: 5px;vertical-align: top;padding-bottom: 20px;font-size: 45px;line-height: 45px;color: #333;">
        <a href="https://mahakalenterprises.com">
          <img src="https://mahakalenterprises.com/wp-content/uploads/2020/07/logo-black-u-150x150.png" height="100" width="100">
        </a>
        </td>
        <td style="padding: 5px;vertical-align: top;text-align: right;padding-bottom: 20px;">
          Transaction Id #: 619687-341885275<br> Date: August 01, 2020 / 04:37:14pm
        </td>
      </tr>
    <tr class="heading">
      <td style="padding: 5px;vertical-align: top;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
        Applicant Basic Details
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;"></td>
    </tr>

    <tr class="item">
      <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
        Name
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
      Dushyant
      </td>
    </tr>

    <tr class="item">
      <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
        Father Name
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
      Singh
      </td>
    </tr>

    <tr class="item">
      <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
        Mother Name
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
      Rathaur
      </td>
    </tr>

    <tr class="item">
      <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
        Date of Birth
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
      August 1, 2020
      </td>
    </tr>

    <tr class="item">
      <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
        Gender
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
      Male
      </td>
    </tr>

    <tr class="item">
      <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
        Category
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
      Gen
      </td>
    </tr>

    <tr class="item">
      <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
        Religion
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
      Hindu
      </td>
    </tr>

    <tr class="item">
      <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
        Merital Status
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
      Married
      </td>
    </tr>
    
    <tr class="heading">
      <td style="padding: 5px;vertical-align: top;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
        Applicant Address(es)
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;"></td>
    </tr>

    <tr class="item">
      <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
        Permanent Address
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
      Permanent Address
      </td>
    </tr>

    <tr class="item">
      <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
        Correspondence Address
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
      Correspondence Address
      </td>
    </tr>

    <tr class="item">
      <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
      Applied for State
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
      Uttar Pradesh (UP)
      </td>
    </tr>

    <tr class="item">
      <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
      Applied for District
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
      Agra
      </td>
    </tr>

    <tr class="item">
      <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
      Applied for Tehsil
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
      Applied Tehsil
      </td>
    </tr>

    <tr class="item">
      <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
      Applied for Block
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
      Applied Block
      </td>
    </tr>

    <tr class="item">
      <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
      Job Place
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
      Gram Sabha
      </td>
    </tr>

    <tr class="heading">
      <td style="padding: 5px;vertical-align: top;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
        Other Details
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;"></td>
    </tr>
    
    <tr class="item">
      <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
      Email
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
      dushyant.rathaur4078@gmail.com
      </td>
    </tr>
    <tr class="item">
      <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
        Phone No.
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
      Mobile Number
      </td>
    </tr>
    <tr class="item">
      <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
        Aadhar Card No.
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
      Adhar Card
      </td>
    </tr>
    <tr class="item">
      <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
        PAN Card No.
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
      Pan
      </td>
    </tr>

    <tr class="heading">
      <td style="padding: 5px;vertical-align: top;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
        Education Detail(s)
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;"></td>
    </tr>
        <tr class="heading">
  <td style="padding: 5px;vertical-align: top;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
    Examination / Degree
  </td>
  <td style="padding: 5px;vertical-align: top;text-align: right;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
    10th      </td>
</tr>
<tr class="item">
  <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
    Name of Board / University
  </td>
  <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
    UP      </td>
</tr>
<tr class="item">
  <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
    Passing Year
  </td>
  <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
    2012      </td>
</tr>
<tr class="item">
  <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
    Roll Number
  </td>
  <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
    0234924      </td>
</tr>
<tr class="item">
  <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
    Division
  </td>
  <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
    1st      </td>
</tr>
<tr class="item">
  <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
    Percentage
  </td>
  <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
    85%
  </td>
</tr>


    <tr class="heading">
      <td style="padding: 5px;vertical-align: top;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
        Work Expireance
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;"></td>
    </tr>
    

    <tr class="heading">
      <td style="padding: 5px;vertical-align: top;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
        Payment Method
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
        
      </td>
    </tr>
    <tr class="heading">
      <td style="padding: 5px;vertical-align: top;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
        Payment Status
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
        failure
      </td>
    </tr>
    <tr>
    </tr><tr class="heading">
      <td style="padding: 5px;vertical-align: top;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
        Job Details
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
      </td>
    </tr>
    <tr class="item">
      <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
        HTML Designer
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
        <a href="https://mahakalenterprises.com/html-designer/">View</a>
      </td>
    </tr>
    <tr class="item">
      <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
        Manage Job
      </td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
        <a href="https://mahakalenterprises.com/profile/manage-job-applied/">Visit</a>
      </td>
    </tr>
    <tr class="total">
      <td style="padding: 5px;vertical-align: top;"></td>
      <td style="padding: 5px;vertical-align: top;text-align: right;border-top: 2px solid #eee;font-weight: bold;">
        Amount: INR1.00
      </td>
    </tr>
</tbody></table>
</div>';


$html2pdf = new Html2Pdf('P', 'A4', 'fr');
$html2pdf->pdf->SetDisplayMode('fullpage');
$html2pdf->writeHTML($html);
$filename = "pdf-document.pdf";
$pdfdoc = $html2pdf->output($filename);
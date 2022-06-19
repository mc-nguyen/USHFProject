<?php
require_once 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>';
$html .= "
<div>
    <table class='grid-container'>
        <tr style='width: 100%'>
            <th align='left'>
                <img src='USHL logo.png' height='120px'/>
            </th>
            <th align='center' class='info-section'>
                <h4>US HEALTH LABORATORIES</h4>
                <h5>6850 SEPULVEDA BOULEVARD</h5>
                <h5>UNIT 220</h5>
                <h5>VAN NUYS, CA 91405</h5>
                <h5>PH: 805-625-9245</h5>
            </th>
            <th align='right' class='info-section'>
                <h5>LABORATORY DIRECTOR</h5>
                <h5>LINDSAY DELLAMAGGIORA MD</h5>
                <h5>US HEALTH LABORATORIES</h5>
                <h5>CLIA NUMBER: 05D2232232</h5>
                <h5>STATE ID: CLF-90004810</h5>
            </th>
        </tr>
    </table>
    <style>
        .grid-container {
            width: 100%;
            table-layout: fixed;
        }
        .info-section {
            margin: auto 0;
        }
        .info-section > h4 {
            margin: 0;
            padding-bottom: 4px;
        }
        .info-section > h5 {
            margin: 0;
            padding-bottom: 2px;
            font-weight: normal;
        }
    </style>
</div>
";
$dompdf->loadHtml($html);

function displayInfo($name, $dob, $sex, $pid, $addr, $phone): string
{
    return "<div>
            <h4>{$name}</h4>
            <p>DATE OF BIRTH: <b>{$dob}</b></p>
            <p>SEX: <b>{$sex}</b></p>
            <p>PATIENT ID: <b>{$pid}</b></p>
            <p>ADDRESS: <br/><b>{$addr}</b></p>
            <p>PHONE: <br/><b>{$phone}</b></p>
        </div>";
}

function labReportInformation($service_date, $sample_ID, $appt_time): string
{
    return "<div>
            <h4>Lab Report Date: {$service_date}</h4>
            <p>SPECIMEN ID: <b>{$sample_ID}</b></p>
            <p>SPECIMEN TYPE: <b>NASOPHARYNGEL SWAB</b></p>
            <p>SPECIMEN COLLECTION DATE: <b>{$service_date}</b></p>
            <p>SPECIMEN COLLECTION TIME: <b>{$appt_time}</b></p>
        </div>";
}

function physician(): string
{
    return "<div>
                <h4>Albury, Denise MD</h4>
                <p>C/O: US HEALTH CLINICS</p>
                <p>3751 MOTOR AVE., STE 173</p>
                <p>LOS ANGELES, CA 90034</p>
                <p>805-357-5577</p>
            </div>";
}

$info = displayInfo(strtoupper('Marvin Calvin'),
    '15 May 1995',
    'Male',
    'XEFKNEK',
    '1505 N Bewley St, Santa Ana, CA 92703',
    '(714) 902-5070'
);
$lab = labReportInformation('23 Apr 2022',
    'CYSE-UWAG',
    '10:00 AM');
$physician = physician();
$html .= "
<div>
    <table class='info-table'>
        <tr>
            <th align='left'>
                <h5 class='title'>PATIENT INFORMATION</h5>
            </th>
            <th align='left'>
                <h5 class='title'>LAB REPORT INFORMATION</h5>
            </th>
            <th align='left'>
                <h5 class='title'>PHYSICIAN INFORMATION</h5>
            </th>
            <style>
                .title {
                    background-color: cornflowerblue;
                    color: white;
                    padding: 10px;
                    margin-bottom: 0;
                }
                h4 {
                    margin: 0 0 10px; 
                }
            </style>
        </tr>
        <tr>
            <td align='left'>
                {$info}
            </td>
            <td align='left'>
                {$lab}
                <img src='CLIA Signature.png' width='200px'/>
            </td>
            <td align='left'>
                {$physician}
            </td>
            <style>
                p {
                    margin: 0;
                    padding: 0;
                    font-size: 9px;
                }
            </style>
        </tr>
    </table>
    <style>
        .info-table {
            width: 100%;
            table-layout: fixed;
            color: dimgray;
        }
        td,th {
            padding: 5px;
        }
        td {
            padding-left: 10px;
            margin-top: 0;
            vertical-align: top;
        }
    </style>
</div>";

$html .= "
<div>
    <table class='negative-title'>
        <tr>
            <th align='left'>MOLECULAR TESTING NEGATIVE RESULTS</th>
            <th align='right'>SARS-CoV-2/COVID-19</th>
        </tr>
    </table>
    <style>
        .negative-title {
            width: 100%;
            background: green;
            color: white;
            padding: 0 20px;
            margin-top: 20px;
        }
    </style>
    <table class='negative-info'>
        <tr>
            <th><img src='icons/negative.png'></th>
            <th align='left'>A NEGATIVE RESULT MEANS THAT THE VIRUS WAS NOT DETECTED IN THE SAMPLE YOU PROVIDED. THE RESULTS SUGGEST YOU WERE NEGATIVE AT THE TIME OF TESTING.</th>
        </tr>
    </table>
    <style>
        .negative-info {
            color: limegreen;
        }
    </style>
    <p align='justify' class='negative-description'>A negative test result for this test means that 
    SARSCoV-2 RNA was not present in the specimen above the limit of detection. 
    For a sample to be considered positive for SARS-CoV-2, the patient sample 
    must return target Ct values of &le;35. However, a negative result does not 
    rule out COVID-19 and should not be used as the sole basis for treatment 
    or patient management decisions. Negative results must be combined with 
    clinical observations, patient history, and epidemiological information. 
    All laboratory tests have limitations. Negative results do not 
    preclude infection with SARS-CoV-2 virus.</p>
    <p align='justify' class='negative-description'>Molecular Testing performed via Thermo Fisher Quant 
    Studio PCR utilizing PheonixDX SARS-CoV-2 test assay. The PheonixDX 
    SARS-C0V-2 assay is an Emergency Use Authorization (EUA) test authorized 
    by the U.S. FDA for use by authorized laboratories, using real-time (RT) 
    polymerase chain reaction (PCR) technology for the qualitative detection 
    of nucleic acids from the SARS-CoV-2 virus and diagnosis of SARS-CoV-2 
    virus infection from individuals meeting CDC clinical and/or 
    epidemiological testing criteria. Testing is limited to laboratories 
    certified under the Clinical Laboratory Improvement Amendments of 1988 
    (CLIA), 42 U.S.C. §263a, that meet requirements to perform high complexity 
    tests. The test detects all current variants of concern as defined by 
    the Center for Disease Control (CDC), including:</p>
    <b align='justify'>B.1.1.7 (Alpha), B.1.351 (Beta), P.1 (Gamma), 
    B.1.617.2 (Delta), B.1.1.529 (Omicron)</b>
    <p class='end-report' align='left'>[END OF REPORT]</p>
    <style>
        .negative-description, .end-report {
            font-size: 12px;
            margin-bottom: 10px; 
            margin-top: 10px; 
        }
        .end-report {
            position: absolute;
            bottom: 0%;
        }
        * { font-family: DejaVu Sans, sans-serif; 
        font-size: 12px}
    </style>
</div>
";

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
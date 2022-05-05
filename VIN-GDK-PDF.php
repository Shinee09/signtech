<?php

$sMST = $_POST["MST"];
$sCTY = $_POST["CTY"];
$sDC = $_POST["DC"];
$sGD = $_POST["GD"];
$sCVU = $_POST["CVU"];

$sGC = $_POST["GC"];
$sCM = "";
$sGH = "";
$s1NAM = "";
$s2NAM = "";
$s3NAM = "";
$s4NAM = "";

switch ($sGC) {
    case 0:
        $sCM   = " &#9744; ";
        $sGH   = " &#9744; ";
        $s1NAM = " &#9744; ";
        $s2NAM = " &#9744; ";
        $s3NAM = " &#9744; ";
        $s4NAM = " &#9744; ";
        break;
    case 1:
        $sCM   = " &#9746; ";
        $s1NAM = " &#9746; ";
        $sGH   = " &#9744; ";
        $s2NAM = " &#9744; ";
        $s3NAM = " &#9744; ";
        $s4NAM = " &#9744; ";
        break;
    case 2:
        $sCM = " &#9746; ";
        $s2NAM = " &#9746; ";
        $sGH = " &#9744; ";
        $s1NAM = " &#9744; ";
        $s3NAM = " &#9744; ";
        $s4NAM = " &#9744; ";
        break;
    case 3:
        $sCM   = " &#9746; ";
        $s3NAM = " &#9746; ";
        $sGH   = " &#9744; ";
        $s1NAM = " &#9744; ";
        $s2NAM = " &#9744; ";
        $s4NAM = " &#9744; ";
        break;
    case 4:
        $sCM   = " &#9746; ";
        $s4NAM = " &#9746; ";
        $sGH   = " &#9744; ";
        $s1NAM = " &#9744; ";
        $s2NAM = " &#9744; ";
        $s3NAM = " &#9744; ";
        break;
    case 5:
        $sGH   = " &#9746; ";
        $s1NAM = " &#9746; ";
        $sCM   = " &#9744; ";
        $s2NAM = " &#9744; ";
        $s3NAM = " &#9744; ";
        $s4NAM = " &#9744; ";
        break;
    case 6:
        $sGH   = " &#9746; ";
        $s2NAM = " &#9746; ";
        $sCM   = " &#9744; ";
        $s1NAM = " &#9744; ";
        $s3NAM = " &#9744; ";
        $s4NAM = " &#9744; ";
        break;
    case 7:
        $sGH   = " &#9746; ";
        $s3NAM = " &#9746; ";
        $sCM   = " &#9744; ";
        $s1NAM = " &#9744; ";
        $s2NAM = " &#9744; ";
        $s4NAM = " &#9744; ";
        break;
    case 8:
        $sGH   = " &#9746; ";
        $s4NAM = " &#9746; ";
        $sCM   = " &#9744; ";
        $s1NAM = " &#9744; ";
        $s2NAM = " &#9744; ";
        $s3NAM = " &#9744; ";
        break;
}

$template_file_name = 'VIN-inputgdk.docx';
$fileName = "GDK_" . $sMST . ".docx";
$folder   = "VIN-RA";
$full_path = $folder . '/' . $fileName;
$pdffile = "VIN-RA" . '/' . "GDK_" . $sMST . ".pdf";

if ($sMST == "") {
    echo '<script language="javascript">';
    echo 'alert("Input not found")';
    echo '</script>';
    exit;
} else if ($sCTY == "") {
    echo '<script language="javascript">';
    echo 'alert("Input not found")';
    echo '</script>';
    exit;
} else if ($sDC == "") {
    echo '<script language="javascript">';
    echo 'alert("Input not found")';
    echo '</script>';
    exit;
} else {
try {
    if (!file_exists($folder)) {
        mkdir($folder);
    }

    //Copy the Template file to the Result Directory
    copy($template_file_name, $full_path);

    // add calss Zip Archive
    $zip = new \ZipArchive;

    //Docx file is nothing but a zip file. Open this Zip File
    if ($zip->open($full_path) == true) {
        // In the Open XML Wordprocessing format content is stored.
        // In the document.xml file located in the word directory.

        $key_file_name = 'word/document.xml';
        $message = $zip->getFromName($key_file_name);

        $timestamp = date('d-M-Y H:i:s');

        // this data Replace the placeholders with actual values
        $message = str_replace("tokenmst", "$sMST",       $message);
        $message = str_replace("tokencty", $sCTY,                  $message);
        $message = str_replace("tokendc",   $sDC,                 $message);
        $message = str_replace("tokengd", $sGD,           $message);
        $message = str_replace("tokencvu", $sCVU,           $message);

        $message = str_replace("G1", $s1NAM, $message);
        $message = str_replace("G2", $s2NAM, $message);
        $message = str_replace("G3", $s3NAM, $message);
        $message = str_replace("G4", $s4NAM, $message);
        $message = str_replace("D1", $sCM,  $message);
        $message = str_replace("D2", $sGH,  $message);
        //Replace the content with the new content created above.
        $zip->addFromString($key_file_name, $message);
        $zip->close();

        // header("Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
        // header("Content-Disposition: attachment; filename=$full_path");
        // header('Content-Transfer-Encoding: binary');
        // header('Expires: 0');

        // readfile($full_path);
    }
} catch (Exception $exc) {
    $error_message =  "Error creating the Word Document";
    var_dump($exc);
}
}
require_once('convertapi/lib/ConvertApi/autoload.php');

use \ConvertApi\ConvertApi;

ConvertApi::setApiSecret('8jOejLvapL2LHdEy');

$result = ConvertApi::convert('pdf', ['File' => $full_path]);

# save to file
$result->getFile()->save($pdffile);

# get file contents (without saving the file locally)
$contents = $result->getFile()->getContents();

if (file_exists($pdffile)) {

    header('Content-Type: application/pdf ');
    header("Content-Disposition: attachment; filename=$pdffile");
    header('Expires: 0');
    readfile($pdffile);
    exit;
}

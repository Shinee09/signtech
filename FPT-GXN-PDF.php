<?php 

$sMST = $_POST["MST"];
$sCTY = $_POST["CTY"];
$sDC = $_POST["DC"];
$sGD = $_POST["GD"];
$sCVU = $_POST["CVU"];

$sSERIAL = $_POST["fpt-serial"];

$sNGAY = $_POST["NGAY"];
$sTHANG = $_POST["THANG"];
$sNAM = $_POST["NAM"];


$template_file_name = 'FPT-inputGXN.docx';
$fileName = "GXN_" . $sMST. ".docx";
$folder   = "FPT-CA";
$full_path = $folder . '/' . $fileName;
$pdffile = "FPT-CA" . '/' . "GXN_" . $sMST . ".pdf";

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
try
{
    if (!file_exists($folder))
    {
        mkdir($folder);
    }       
         
    //Copy the Template file to the Result Directory
    copy($template_file_name, $full_path);
 
    // add calss Zip Archive
    $zip = new \ZipArchive;
 
    //Docx file is nothing but a zip file. Open this Zip File
    if($zip->open($full_path) == true)
    {
        // In the Open XML Wordprocessing format content is stored.
        // In the document.xml file located in the word directory.
         
        $key_file_name = 'word/document.xml';
        $message = $zip->getFromName($key_file_name);                
                     
        $timestamp = date('d-M-Y H:i:s');
         
        // this data Replace the placeholders with actual values
        $message = str_replace("tokenmst",$sMST,$message);
        $message = str_replace("tokencty",$sCTY,$message);
        $message = str_replace("tokendc",$sDC,$message); 
        $message = str_replace("tokengd",$sGD,$message); 
        $message = str_replace("tokencvu",$sCVU,$message);

        $message = str_replace("tokenserial",$sSERIAL,$message);
        
        $message = str_replace("tngay",    $sNGAY,  $message); 
        $message = str_replace("tthang",   $sTHANG, $message); 
        $message = str_replace("tnam",     $sNAM,   $message);
        //Replace the content with the new content created above.
        $zip->addFromString($key_file_name, $message);
        $zip->close();
        
        // header("Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
        // header("Content-Disposition: attachment; filename=$full_path");
        // header('Content-Transfer-Encoding: binary');
        // header('Expires: 0');

        // readfile($full_path);
    }
}
catch (Exception $exc) 
{
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
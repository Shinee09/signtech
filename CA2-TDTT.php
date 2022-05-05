<?php 

$sMST = $_POST["MST-CA2TDTT"];
$sCTY = $_POST["CTY-CA2TDTT"];
$sDC = $_POST["DC-CA2TDTT"];
$sGD = $_POST["GD-CA2TDTT"];
$sCMND = $_POST["CMND-CA2TDTT"];
$sCVU = $_POST["CVU-CA2TDTT"];
$sCTYc = $_POST["CTYC-CA2TDTT"];
$sDCc = $_POST["DCC-CA2TDTT"];
$sSerial = $_POST["SERIAL-CA2TDTT"];
$sNBD = $_POST["NBD-CA2TDTT"];
$sNKT = $_POST["NKT-CA2TDTT"];
$sNBD2 = date("d/m/Y", strtotime($sNBD));  
$sNKT2 = date("d/m/Y", strtotime($sNKT));
// $sNGAY = $_POST["NGAY"];
// $sTHANG = $_POST["THANG"];
// $sNAM = $_POST["NAM"];


$template_file_name = 'CA2-inputTDTT.docx';
$fileName = "TDTT_" . $sMST. ".docx";
$folder   = "CA2";
$full_path = $folder . '/' . $fileName;

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
        $message = str_replace("tokencmnd",$sCMND,$message);
        $message = str_replace("tokencvu",$sCVU,$message);

        $message = str_replace("tokentencu",$sCTYc,$message);
        $message = str_replace("tokendiachicu",$sDCc,$message);

        $message = str_replace("tokenserial",$sSerial,$message);

        $message = str_replace("nbatdau",$sNBD2,$message);
        $message = str_replace("nketthuc",$sNKT2,$message);
        // $message = str_replace("tngay",    $sNGAYt,  $message);
        // $message = str_replace("tthang",   $sTHANGt,  $message);
        // $message = str_replace("tnam",     $sNAMt,  $message);
        //Replace the content with the new content created above.
        $zip->addFromString($key_file_name, $message);
        $zip->close();
        
        header("Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
        header("Content-Disposition: attachment; filename=$full_path");
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');

        readfile($full_path);
    }
}
catch (Exception $exc) 
{
    $error_message =  "Error creating the Word Document";
    var_dump($exc);
}

exit();

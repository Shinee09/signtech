<?php 

$sMST = $_POST["MST"];
$sCTY = $_POST["CTY"];
$sDC = $_POST["DC"];
$sGD = $_POST["GD"];
$sCVU = $_POST["CVU"];

$sTTP = $_POST["ttp"];

$sNGAY = $_POST["NGAY"];
$sTHANG = $_POST["THANG"];
$sNAM = $_POST["NAM"];

$sNGAYt = "";
$sTHANGt = "";
$sNAMt = "";

if ($sNGAY == ""){
    $sNGAYt = "......";
} else {
    $sNGAYt = $sNGAY;
}

if ($sTHANG == ""){
    $sTHANGt = "......";
} else {
    $sTHANGt = $sTHANG;
}

if ($sNAM == ""){
    $sNAMt = ".........";
} else {
    $sNAMt = $sNAM;
}


$template_file_name = 'EFY-inputTOKEN.docx';
$fileName = "CAP_LAI_TOKEN_" . $sMST. ".docx";
$folder   = "EFY-CA";
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
        $message = str_replace("tokenmst", $sMST,   $message);
        $message = str_replace("tokencty", $sCTY,   $message);
        $message = str_replace("tokendc",  $sDC,    $message); 
        $message = str_replace("tokengd",  $sGD,    $message); 
        $message = str_replace("tokencvu", $sCVU,   $message);

        $message = str_replace("tokenttp",    $sTTP,  $message);

        $message = str_replace("tngay",    $sNGAYt,  $message);
        $message = str_replace("tthang",   $sTHANGt,  $message);
        $message = str_replace("tnam",     $sNAMt,  $message);
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

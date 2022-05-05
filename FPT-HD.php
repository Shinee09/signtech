<?php 

$sMST = $_POST["MST"];
$sCTY = $_POST["CTY"];
$sDC = $_POST["DC"];
$sGD = $_POST["GD"];
$sCVU = $_POST["CVU"];

$sMSTC = $_POST["MSTc2"];
$sCTYC = $_POST["CTYc2"];
$sDCC = $_POST["DCc2"];
$sGDC = $_POST["GDc2"];
$sCVUC = $_POST["CVUc2"];

$sNGAY = $_POST["NGAY"];
$sTHANG = $_POST["THANG"];
$sNAM = $_POST["NAM"];
$sGC = $_POST["GC"];
$s1NAM = "";
$s2NAM = "";
$s3NAM = "";

switch($sGC) {
    case 0:
        $s1NAM= " &#9744; ";
        $s2NAM= " &#9744; ";
        $s3NAM= " &#9744; ";
    break;
    case 1:
        $s1NAM= " &#9746; ";
        $s2NAM= " &#9744; ";
        $s3NAM= " &#9744; ";
    break;
    case 2:
        $s2NAM= " &#9746; ";
        $s1NAM= " &#9744; ";
        $s3NAM= " &#9744; ";
    break;
    case 3:
        $s3NAM= " &#9746; ";
        $s1NAM= " &#9744; ";
        $s2NAM= " &#9744; ";
    break;
}

if($sNGAY == ""){
    $sNTN = ".../.../......";
}else {
    $sNTN = $sNGAY . "/" . $sTHANG . "/" . $sNAM;
}

$template_file_name = 'FPT-inputHD.docx';
$fileName = "HD_" . $sMST. ".docx";
$folder   = "FPT-CA";
$full_path = $folder . '/' . $fileName;

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
        $message = str_replace("tokenmst", $sMST,       $message);
        $message = str_replace("tokencty", $sCTY,                  $message);
        $message = str_replace("tokendc",   $sDC,                 $message); 
        $message = str_replace("tokengd", $sGD,           $message); 
        $message = str_replace("tokencvu", $sCVU,           $message);  

        $message = str_replace("tokenCmst", $sMSTC,       $message);
        $message = str_replace("tokenCcty", $sCTYC,                  $message);
        $message = str_replace("tokenCdc",   $sDCC,                 $message); 
        $message = str_replace("tokenCgd", $sGDC,           $message); 
        $message = str_replace("tokenCcvu", $sCVUC,           $message);  

        $message = str_replace("G1", $s1NAM,$message); 
        $message = str_replace("G2", $s2NAM,$message); 
        $message = str_replace("G3", $s3NAM,$message);
        $message = str_replace("tngay",    $sNGAY,  $message); 
        $message = str_replace("tthang",   $sTHANG, $message); 
        $message = str_replace("tnam",     $sNAM,   $message);
        $message = str_replace("ntnHD",    $sNTN,  $message);
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
}

exit();
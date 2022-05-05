<?php 

$sMST = $_POST["MST"];
$sCTY = $_POST["CTY"];
$sDC = $_POST["DC"];
$sGD = $_POST["GD"];
$sCVU = $_POST["CVU"];
// $sNGAY = $_POST["NGAY"];
// $sTHANG = $_POST["THANG"];
// $sNAM = $_POST["NAM"];
// $sCMND = $_POST["CMND"];
// $sNCCMND = $_POST["NCCMND"];
// $sCNGAY = $_POST["CNGAY"];
// $sCTHANG = $_POST["CTHANG"];
// $sCNAM = $_POST["CNAM"];
// $sSERIAL = $_POST["SERIAL"];

$template_file_name = 'VIN-inputgxn.docx';
$fileName = "GXN_" . $sMST. ".docx";
$folder   = "VIN-RA";
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
        $message = str_replace("tokenmst", "$sMST",       $message);
        $message = str_replace("tokencty", $sCTY,                  $message);
        $message = str_replace("tokendc",   $sDC,                 $message); 
        $message = str_replace("tokengd", $sGD,           $message); 
        $message = str_replace("tokencvu", $sCVU,           $message);  
        // $message = str_replace("tokenngay", $sNGAY,           $message);
        // $message = str_replace("tokenthang", $sTHANG,           $message);
        // $message = str_replace("tokennam", $sNAM,           $message);
        // $message = str_replace("tokencmnd", $sCMND,           $message);
        // $message = str_replace("tokencngay", $sCNGAY,           $message);
        // $message = str_replace("tokennccmnd", $sNCCMND,           $message);
        // $message = str_replace("tokencthang", $sCTHANG,           $message);
        // $message = str_replace("tokencnam", $sCNAM,           $message);
        // $message = str_replace("tokenserial", $sSERIAL,           $message);


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
?>
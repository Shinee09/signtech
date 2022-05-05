<?php 

$sMST = $_POST["MST"];
$sCTY = $_POST["CTY"];
$sDC = $_POST["DC"];
$sGD = $_POST["GD"];
$sCVU = $_POST["CVU"];
$sNAM = $_POST["NAM"];
$sGC = $_POST['GC'];
$sTT = "";
$s1NAM = "";
$s2NAM = "";
$s3NAM = "";

switch($sGC) {
   case 1:
      $sTT= "1.827.100đ";
      $s1NAM = " &#9746; ";
      $s2NAM = " &#9744; ";
      $s3NAM = " &#9744; ";
   break;
   case 2:
      $sTT= "2.741.200đ";
      $s2NAM = " &#9746; ";
      $s1NAM = " &#9744; ";
      $s3NAM = " &#9744; ";
   break;
   case 3:
      $sTT= "3.110.800đ";
      $s3NAM = " &#9746; ";
      $s1NAM = " &#9744; ";
      $s2NAM = " &#9744; ";
   break;
   case 4:
      $sTT= "";
      $s1NAM = " &#9746; ";
      $s2NAM = " &#9744; ";
      $s3NAM = " &#9744; ";
   break;
   case 5:
      $sTT= "";
      $s2NAM = " &#9746; ";
      $s1NAM = " &#9744; ";
      $s3NAM = " &#9744; ";
   break;
   case 6:
      $sTT= "";
      $s3NAM = " &#9746; ";
      $s1NAM = " &#9744; ";
      $s2NAM = " &#9744; ";
   break;
}

$template_file_name = 'CA2-inputCM.docx';
$fileName = "CM_" . $sMST. ".docx";
$folder   = "CA2";
$full_path = $folder . '/' . $fileName;
$pdffile = "CA2" . '/' . "CM_" . $sMST . ".pdf";

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
        $message = str_replace("tokenmst","$sMST",$message);
        $message = str_replace("tokencty",$sCTY,$message);
        $message = str_replace("tokendc",$sDC,$message); 
        $message = str_replace("tokengd",$sGD,$message); 
        $message = str_replace("tokencvu",$sCVU,$message);
        $message = str_replace("tnam",$sNAM,$message); 
        $message = str_replace("tokentt",$sTT,$message); 

        $message = str_replace("G1", $s1NAM,$message); 
        $message = str_replace("G2", $s2NAM,$message); 
        $message = str_replace("G3", $s3NAM,$message);
        //Replace the content with the new content created above.
        $zip->addFromString($key_file_name, $message);
        $zip->close();
        
      //   header("Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
      //   header("Content-Disposition: attachment; filename=$full_path");
      //   header('Content-Transfer-Encoding: binary');
      //   header('Expires: 0');

      //   readfile($full_path);
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
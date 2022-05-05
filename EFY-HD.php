<?php

$sMST = $_POST["MST"];
$sCTY = $_POST["CTY"];
$sDC = $_POST["DC"];
$sGD = $_POST["GD"];
$sCVU = $_POST["CVU"];

$sNGAY = $_POST["NGAY"];
$sTHANG = $_POST["THANG"];
$sNAM = $_POST["NAM"];

$sNGAYt = "";
$sTHANGt = "";
$sNAMt = "";

$sGC = $_POST["GC"];

$sCM = "";
$sGH = "";
$s1NAM = "";
$s2NAM = "";
$s3NAM = "";
$sgcdv = "";
$sgoigv = "";
$sthanhtien = "";
$stienbangchu = "";


if ($sNGAY == "") {
    $sNGAYt = "...";
} else {
    $sNGAYt = $sNGAY;
}

if ($sTHANG == "") {
    $sTHANGt = "...";
} else {
    $sTHANGt = $sTHANG;
}

if ($sNAM == "") {
    $sNAMt = "......";
} else {
    $sNAMt = $sNAM;
}

switch ($sGC) {
    case 0:
        $sCM = " &#9744; ";
        $sGH = " &#9744; ";
        $s1NAM = " &#9744; ";
        $s2NAM = " &#9744; ";
        $s3NAM = " &#9744; ";
        $sgcdv = "................";
        $sgoigv = ".......";
        $sthanhtien = "................";
        $stienbangchu = "......................................................................................................................................";
        break;
    case 1:
        $sCM = " &#9746; ";
        $s1NAM = " &#9746; ";
        $sGH = " &#9744; ";
        $s2NAM = " &#9744; ";
        $s3NAM = " &#9744; ";
        $sgcdv = "cấp mới 1 năm";
        $sgoigv = "12";
        $sthanhtien = "1.830.000";
        $stienbangchu = "Một triệu tám trăm ba mươi ngàn đồng chẵn";
        break;
    case 2:
        $sCM = " &#9746; ";
        $s2NAM = " &#9746; ";
        $sGH = " &#9744; ";
        $s1NAM = " &#9744; ";
        $s3NAM = " &#9744; ";
        $sgcdv = "cấp mới 2 năm";
        $sgoigv = "24";
        $sthanhtien = "2.730.000";
        $stienbangchu = "Hai triệu bảy trăm ba mươi ba ngàn đồng chẵn";
        break;
    case 3:
        $sCM = " &#9746; ";
        $s3NAM = " &#9746; ";
        $sGH = " &#9744; ";
        $s1NAM = " &#9744; ";
        $s2NAM = " &#9744; ";
        $sgcdv = "cấp mới 3 năm";
        $sgoigv = "36";
        $sthanhtien = "3.080.000";
        $stienbangchu = "Ba triệu không trăm lẻ tám mươi ba ngàn đồng chẵn";
        break;
    case 4:
        $sGH = " &#9746; ";
        $s1NAM = " &#9746; ";
        $sCM = " &#9744; ";
        $s2NAM = " &#9744; ";
        $s3NAM = " &#9744; ";
        $sgcdv = "gia hạn 1 năm";
        $sgoigv = "12";
        $sthanhtien = "1.280.000";
        $stienbangchu = "Một triệu hai trăm tám mươi ba ngàn đồng chẵn";
        break;
    case 5:
        $sGH = " &#9746; ";
        $s2NAM = " &#9746; ";
        $sCM = " &#9744; ";
        $s1NAM = " &#9744; ";
        $s3NAM = " &#9744; ";
        $sgcdv = "gia hạn 2 năm";
        $sgoigv = "24";
        $sthanhtien = "2.180.000";
        $stienbangchu = "Hai triệu một trăm tám mươi ba ngàn đồng chẵn";
        break;
    case 6:
        $sGH = " &#9746; ";
        $s3NAM = " &#9746; ";
        $sCM = " &#9744; ";
        $s1NAM = " &#9744; ";
        $s2NAM = " &#9744; ";
        $sgcdv = "gia hạn 3 năm";
        $sgoigv = "36";
        $sthanhtien = "2.880.000";
        $stienbangchu = "Hai triệu tám trăm tám mươi ba ngàn đồng chẵn";
        break;
}


$template_file_name = 'EFY-inputHD.docx';
$fileName = "HD_" . $sMST . ".docx";
$folder   = "EFY-CA";
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
            $message = str_replace("tokenmst", $sMST,   $message);
            $message = str_replace("tokencty", $sCTY,   $message);
            $message = str_replace("tokendc",  $sDC,    $message);
            $message = str_replace("tokengd",  $sGD,    $message);
            $message = str_replace("tokencvu", $sCVU,   $message);

            $message = str_replace("tngay", $sNGAYt,         $message);
            $message = str_replace("tthang", $sTHANGt,       $message);
            $message = str_replace("tnam", $sNAMt,           $message);

            $message = str_replace("tokengoicuoc", $sgcdv,  $message);
            $message = str_replace("tokensothang", $sgoigv,  $message);
            $message = str_replace("tokenthanhtien", $sthanhtien,  $message);
            $message = str_replace("tokentienbangchu", $stienbangchu,  $message);

            //Replace the content with the new content created above.
            $zip->addFromString($key_file_name, $message);
            $zip->close();

            header("Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
            header("Content-Disposition: attachment; filename=$full_path");
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');

            readfile($full_path);
        }
    } catch (Exception $exc) {
        $error_message =  "Error creating the Word Document";
        var_dump($exc);
    }
}
exit();

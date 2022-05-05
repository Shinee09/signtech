<?php 

$sMST = $_POST["MST"];
$sCTY = $_POST["CTY"];
$sGD = $_POST["GD"];
$sCVU = $_POST["CVU"];

$ssnpx = $_POST["snpx"];
$sgetqh = $_POST["get-qh"];
$sgetttp = $_POST["get-ttp"];



if ($sgetttp == "1") {
    $sTTP ="An Giang";
} elseif ($sgetttp == "2"){
    $sTTP = "Bà Rịa - Vũng Tàu";
} elseif ($sgetttp == "3"){
    $sTTP = "Bạc Liêu";
} elseif ($sgetttp == "4"){
    $sTTP = "Bắc Kạn";
} elseif ($sgetttp == "5"){
    $sTTP = "Bắc Giang";
} elseif ($sgetttp == "6"){
    $sTTP = "Bắc Ninh";
} elseif ($sgetttp == "7"){
    $sTTP = "Bến Tre";
} elseif ($sgetttp == "8"){
    $sTTP = "Bình Dương";
} elseif ($sgetttp == "9"){
    $sTTP = "Bình Định";
} elseif ($sgetttp == "10"){
    $sTTP = "Bình Phước";
} elseif ($sgetttp == "11"){
    $sTTP = "Bình Thuận";
} elseif ($sgetttp == "12"){
    $sTTP = "Cà Mau";
} elseif ($sgetttp == "13"){
    $sTTP = "Cao Bằng";
} elseif ($sgetttp == "14"){
    $sTTP = "Cần Thơ";
} elseif ($sgetttp == "15"){
    $sTTP = "Đà Nẵng";
} elseif ($sgetttp == "16"){
    $sTTP = "Đắk Lắk";
} elseif ($sgetttp == "17"){
    $sTTP = "Đắk Nông";
} elseif ($sgetttp == "18"){
    $sTTP = "Đồng Nai";
} elseif ($sgetttp == "19"){
    $sTTP = "Đồng Tháp";
} elseif ($sgetttp == "20"){
    $sTTP = "Điện Biên";
} elseif ($sgetttp == "21"){
    $sTTP = "Gia Lai";
} elseif ($sgetttp == "22"){
    $sTTP = "Hà Giang";
} elseif ($sgetttp == "23"){
    $sTTP = "Hà Nam";
} elseif ($sgetttp == "24"){
    $sTTP = "Hà Nội";
} elseif ($sgetttp == "25"){
    $sTTP = "Hà Tĩnh";
} elseif ($sgetttp == "26"){
    $sTTP = "Hải Dương";
} elseif ($sgetttp == "27"){
    $sTTP = "Hải Phòng";
} elseif ($sgetttp == "28"){
    $sTTP = "Hòa Bình";
} elseif ($sgetttp == "29"){
    $sTTP = "Hậu Giang";
} elseif ($sgetttp == "30"){
    $sTTP = "Hưng Yên";
} elseif ($sgetttp == "31"){
    $sTTP = "Thành phố Hồ Chí Minh";
} elseif ($sgetttp == "32"){
    $sTTP = "Khánh Hòa";
} elseif ($sgetttp == "33"){
    $sTTP = "Kiên Giang";
} elseif ($sgetttp == "34"){
    $sTTP = "Kon Tum";
} elseif ($sgetttp == "35"){
    $sTTP = "Lai Châu";
} elseif ($sgetttp == "36"){
    $sTTP = "Lào Cai";
} elseif ($sgetttp == "37"){
    $sTTP = "Lạng Sơn";
} elseif ($sgetttp == "38"){
    $sTTP = "Lâm Đồng";
} elseif ($sgetttp == "39"){
    $sTTP = "Long An";
} elseif ($sgetttp == "40"){
    $sTTP = "Nam Định";
} elseif ($sgetttp == "41"){
    $sTTP = "Nghệ An";
} elseif ($sgetttp == "42"){
    $sTTP = "Ninh Bình";
} elseif ($sgetttp == "43"){
    $sTTP = "Ninh Thuận";
} elseif ($sgetttp == "44"){
    $sTTP = "Phú Thọ";
} elseif ($sgetttp == "45"){
    $sTTP = "Phú Yên";
} elseif ($sgetttp == "46"){
    $sTTP = "Quảng Bình";
} elseif ($sgetttp == "47"){
    $sTTP = "Quảng Nam";
} elseif ($sgetttp == "48"){
    $sTTP = "Quảng Ngãi";
} elseif ($sgetttp == "49"){
    $sTTP = "Quảng Ninh";
} elseif ($sgetttp == "50"){
    $sTTP = "Quảng Trị";
} elseif ($sgetttp == "51"){
    $sTTP = "Sóc Trăng";
} elseif ($sgetttp == "52"){
    $sTTP = "Sơn La";
} elseif ($sgetttp == "53"){
    $sTTP = "Tây Ninh";
} elseif ($sgetttp == "54"){
    $sTTP = "Thái Bình";
} elseif ($sgetttp == "55"){
    $sTTP = "Thái Nguyên";
} elseif ($sgetttp == "56"){
    $sTTP = "Thanh Hóa";
} elseif ($sgetttp == "57"){
    $sTTP = "Thừa Thiên - Huế";
} elseif ($sgetttp == "58"){
    $sTTP = "Tiền Giang";
} elseif ($sgetttp == "59"){
    $sTTP = "Trà Vinhu";
} elseif ($sgetttp == "60"){
    $sTTP = "Tuyên Quang";
} elseif ($sgetttp == "61"){
    $sTTP = "Vĩnh Long";
} elseif ($sgetttp == "62"){
    $sTTP = "Vĩnh Phúc";
} elseif ($sgetttp == "63"){
    $sTTP = "Yên Bái";
}

$sMSTC = $_POST["MST-Hd-New"];
$sCTYC = $_POST["CTY-Hd-New"];
$sDCC = $_POST["DC-Hd-New"];
$sGDC = $_POST["GD-Hd-New"];
$sCVUC = $_POST["CVU-Hd-New"];



$template_file_name = 'New-inputHD.docx';
$fileName = "HD_" . $sMST. ".docx";
$folder   = "New-CA";
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
        $message = str_replace("tokengd",$sGD,$message); 
        $message = str_replace("tokencvu",$sCVU,$message);
        
        $message = str_replace("tokenCmst", $sMSTC,       $message);
        $message = str_replace("tokenCcty", $sCTYC,                  $message);
        $message = str_replace("tokenCdc",   $sDCC,                 $message); 
        $message = str_replace("tokenCgd", $sGDC,           $message); 
        $message = str_replace("tokenCcvu", $sCVUC,           $message);  

        $message = str_replace("tokensn",$ssnpx ,$message); 
        $message = str_replace("tokenqh",$sgetqh,$message); 
        $message = str_replace("tokenttp",$sTTP,$message);
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
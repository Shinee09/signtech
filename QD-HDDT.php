<?php 

$sMST = $_POST["MST"];
$sCTY = $_POST["CTY"];
$sCTYKHT = $_POST["CTY-KHT"];
$sGD = $_POST["GD"];

$sGPKDngay = $_POST["gpkd-ngay"];
$sGPKDthang = $_POST["gpkd-thang"];
$sGPKDnam = $_POST["gpkd-nam"];

$skhhd = $_POST["khhd"];
$skvtql = $_POST["kvtql"];
$sgetttp = $_POST["get-ttp"];



if ($sgetttp == "1") {
    $sTTP ="Tỉnh An Giang";
} elseif ($sgetttp == "2"){
    $sTTP = "Tỉnh Bà Rịa - Vũng Tàu";
} elseif ($sgetttp == "3"){
    $sTTP = "Tỉnh Bạc Liêu";
} elseif ($sgetttp == "4"){
    $sTTP = "Tỉnh Bắc Kạn";
} elseif ($sgetttp == "5"){
    $sTTP = "Tỉnh Bắc Giang";
} elseif ($sgetttp == "6"){
    $sTTP = "Tỉnh Bắc Ninh";
} elseif ($sgetttp == "7"){
    $sTTP = "Tỉnh Bến Tre";
} elseif ($sgetttp == "8"){
    $sTTP = "Tỉnh Bình Dương";
} elseif ($sgetttp == "9"){
    $sTTP = "Tỉnh Bình Định";
} elseif ($sgetttp == "10"){
    $sTTP = "Tỉnh Bình Phước";
} elseif ($sgetttp == "11"){
    $sTTP = "Tỉnh Bình Thuận";
} elseif ($sgetttp == "12"){
    $sTTP = "Tỉnh Cà Mau";
} elseif ($sgetttp == "13"){
    $sTTP = "Tỉnh Cao Bằng";
} elseif ($sgetttp == "14"){
    $sTTP = "TP. Cần Thơ";
} elseif ($sgetttp == "15"){
    $sTTP = "TP. Đà Nẵng";
} elseif ($sgetttp == "16"){
    $sTTP = "Tỉnh Đắk Lắk";
} elseif ($sgetttp == "17"){
    $sTTP = "Tỉnh Đắk Nông";
} elseif ($sgetttp == "18"){
    $sTTP = "Tỉnh Đồng Nai";
} elseif ($sgetttp == "19"){
    $sTTP = "Tỉnh Đồng Tháp";
} elseif ($sgetttp == "20"){
    $sTTP = "Tỉnh Điện Biên";
} elseif ($sgetttp == "21"){
    $sTTP = "Tỉnh Gia Lai";
} elseif ($sgetttp == "22"){
    $sTTP = "Tỉnh Hà Giang";
} elseif ($sgetttp == "23"){
    $sTTP = "Tỉnh Hà Nam";
} elseif ($sgetttp == "24"){
    $sTTP = "TP. Hà Nội";
} elseif ($sgetttp == "25"){
    $sTTP = "Tỉnh Hà Tĩnh";
} elseif ($sgetttp == "26"){
    $sTTP = "Tỉnh Hải Dương";
} elseif ($sgetttp == "27"){
    $sTTP = "TP. Hải Phòng";
} elseif ($sgetttp == "28"){
    $sTTP = "Tỉnh Hòa Bình";
} elseif ($sgetttp == "29"){
    $sTTP = "Tỉnh Hậu Giang";
} elseif ($sgetttp == "30"){
    $sTTP = "Tỉnh Hưng Yên";
} elseif ($sgetttp == "31"){
    $sTTP = "TP. Hồ Chí Minh";
} elseif ($sgetttp == "32"){
    $sTTP = "Tỉnh Khánh Hòa";
} elseif ($sgetttp == "33"){
    $sTTP = "Tỉnh Kiên Giang";
} elseif ($sgetttp == "34"){
    $sTTP = "Tỉnh Kon Tum";
} elseif ($sgetttp == "35"){
    $sTTP = "Tỉnh Lai Châu";
} elseif ($sgetttp == "36"){
    $sTTP = "Tỉnh Lào Cai";
} elseif ($sgetttp == "37"){
    $sTTP = "Tỉnh Lạng Sơn";
} elseif ($sgetttp == "38"){
    $sTTP = "Tỉnh Lâm Đồng";
} elseif ($sgetttp == "39"){
    $sTTP = "Tỉnh Long An";
} elseif ($sgetttp == "40"){
    $sTTP = "Tỉnh Nam Định";
} elseif ($sgetttp == "41"){
    $sTTP = "Tỉnh Nghệ An";
} elseif ($sgetttp == "42"){
    $sTTP = "Tỉnh Ninh Bình";
} elseif ($sgetttp == "43"){
    $sTTP = "Tỉnh Ninh Thuận";
} elseif ($sgetttp == "44"){
    $sTTP = "Tỉnh Phú Thọ";
} elseif ($sgetttp == "45"){
    $sTTP = "Tỉnh Phú Yên";
} elseif ($sgetttp == "46"){
    $sTTP = "Tỉnh Quảng Bình";
} elseif ($sgetttp == "47"){
    $sTTP = "Tỉnh Quảng Nam";
} elseif ($sgetttp == "48"){
    $sTTP = "Tỉnh Quảng Ngãi";
} elseif ($sgetttp == "49"){
    $sTTP = "Tỉnh Quảng Ninh";
} elseif ($sgetttp == "50"){
    $sTTP = "Tỉnh Quảng Trị";
} elseif ($sgetttp == "51"){
    $sTTP = "Tỉnh Sóc Trăng";
} elseif ($sgetttp == "52"){
    $sTTP = "Tỉnh Sơn La";
} elseif ($sgetttp == "53"){
    $sTTP = "Tỉnh Tây Ninh";
} elseif ($sgetttp == "54"){
    $sTTP = "Tỉnh Thái Bình";
} elseif ($sgetttp == "55"){
    $sTTP = "Tỉnh Thái Nguyên";
} elseif ($sgetttp == "56"){
    $sTTP = "Tỉnh Thanh Hóa";
} elseif ($sgetttp == "57"){
    $sTTP = "Tỉnh Thừa Thiên - Huế";
} elseif ($sgetttp == "58"){
    $sTTP = "Tỉnh Tiền Giang";
} elseif ($sgetttp == "59"){
    $sTTP = "Tỉnh Trà Vinh";
} elseif ($sgetttp == "60"){
    $sTTP = "Tỉnh Tuyên Quang";
} elseif ($sgetttp == "61"){
    $sTTP = "Tỉnh Vĩnh Long";
} elseif ($sgetttp == "62"){
    $sTTP = "Tỉnh Vĩnh Phúc";
} elseif ($sgetttp == "63"){
    $sTTP = "Tỉnh Yên Bái";
}

if ($sgetttp == "1") {
    $sTP ="An Giang";
} elseif ($sgetttp == "2"){
    $sTP = "Bà Rịa - Vũng Tàu";
} elseif ($sgetttp == "3"){
    $sTP = "Bạc Liêu";
} elseif ($sgetttp == "4"){
    $sTP = "Bắc Kạn";
} elseif ($sgetttp == "5"){
    $sTP = "Bắc Giang";
} elseif ($sgetttp == "6"){
    $sTP = "Bắc Ninh";
} elseif ($sgetttp == "7"){
    $sTP = "Bến Tre";
} elseif ($sgetttp == "8"){
    $sTP = "Bình Dương";
} elseif ($sgetttp == "9"){
    $sTP = "Bình Định";
} elseif ($sgetttp == "10"){
    $sTP = "Bình Phước";
} elseif ($sgetttp == "11"){
    $sTP = "Bình Thuận";
} elseif ($sgetttp == "12"){
    $sTP = "Cà Mau";
} elseif ($sgetttp == "13"){
    $sTP = "Cao Bằng";
} elseif ($sgetttp == "14"){
    $sTP = "Cần Thơ";
} elseif ($sgetttp == "15"){
    $sTP = "Đà Nẵng";
} elseif ($sgetttp == "16"){
    $sTP = "Đắk Lắk";
} elseif ($sgetttp == "17"){
    $sTP = "Đắk Nông";
} elseif ($sgetttp == "18"){
    $sTP = "Đồng Nai";
} elseif ($sgetttp == "19"){
    $sTP = "Đồng Tháp";
} elseif ($sgetttp == "20"){
    $sTP = "Điện Biên";
} elseif ($sgetttp == "21"){
    $sTP = "Gia Lai";
} elseif ($sgetttp == "22"){
    $sTP = "Hà Giang";
} elseif ($sgetttp == "23"){
    $sTP = "Hà Nam";
} elseif ($sgetttp == "24"){
    $sTP = "Hà Nội";
} elseif ($sgetttp == "25"){
    $sTP = "Hà Tĩnh";
} elseif ($sgetttp == "26"){
    $sTP = "Hải Dương";
} elseif ($sgetttp == "27"){
    $sTP = "Hải Phòng";
} elseif ($sgetttp == "28"){
    $sTP = "Hòa Bình";
} elseif ($sgetttp == "29"){
    $sTP = "Hậu Giang";
} elseif ($sgetttp == "30"){
    $sTP = "Hưng Yên";
} elseif ($sgetttp == "31"){
    $sTP = "Hồ Chí Minh";
} elseif ($sgetttp == "32"){
    $sTP = "Khánh Hòa";
} elseif ($sgetttp == "33"){
    $sTP = "Kiên Giang";
} elseif ($sgetttp == "34"){
    $sTP = "Kon Tum";
} elseif ($sgetttp == "35"){
    $sTP = "Lai Châu";
} elseif ($sgetttp == "36"){
    $sTP = "Lào Cai";
} elseif ($sgetttp == "37"){
    $sTP = "Lạng Sơn";
} elseif ($sgetttp == "38"){
    $sTP = "Lâm Đồng";
} elseif ($sgetttp == "39"){
    $sTP = "Long An";
} elseif ($sgetttp == "40"){
    $sTP = "Nam Định";
} elseif ($sgetttp == "41"){
    $sTP = "Nghệ An";
} elseif ($sgetttp == "42"){
    $sTP = "Ninh Bình";
} elseif ($sgetttp == "43"){
    $sTP = "Ninh Thuận";
} elseif ($sgetttp == "44"){
    $sTP = "Phú Thọ";
} elseif ($sgetttp == "45"){
    $sTP = "Phú Yên";
} elseif ($sgetttp == "46"){
    $sTP = "Quảng Bình";
} elseif ($sgetttp == "47"){
    $sTP = "Quảng Nam";
} elseif ($sgetttp == "48"){
    $sTP = "Quảng Ngãi";
} elseif ($sgetttp == "49"){
    $sTP = "Quảng Ninh";
} elseif ($sgetttp == "50"){
    $sTP = "Quảng Trị";
} elseif ($sgetttp == "51"){
    $sTP = "Sóc Trăng";
} elseif ($sgetttp == "52"){
    $sTP = "Sơn La";
} elseif ($sgetttp == "53"){
    $sTP = "Tây Ninh";
} elseif ($sgetttp == "54"){
    $sTP = "Thái Bình";
} elseif ($sgetttp == "55"){
    $sTP = "Thái Nguyên";
} elseif ($sgetttp == "56"){
    $sTP = "Thanh Hóa";
} elseif ($sgetttp == "57"){
    $sTP = "Thừa Thiên - Huế";
} elseif ($sgetttp == "58"){
    $sTP = "Tiền Giang";
} elseif ($sgetttp == "59"){
    $sTP = "Trà Vinhu";
} elseif ($sgetttp == "60"){
    $sTP = "Tuyên Quang";
} elseif ($sgetttp == "61"){
    $sTP = "Vĩnh Long";
} elseif ($sgetttp == "62"){
    $sTP = "Vĩnh Phúc";
} elseif ($sgetttp == "63"){
    $sTP = "Yên Bái";
}

$template_file_name = 'QuyetDinh-input.docx';
$fileName = $sMST. ".docx";
$folder   = "QĐ_HĐĐT";
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
        $message = str_replace("tokenkht",$sCTYKHT,$message);
        $message = str_replace("tokengd",$sGD,$message); 
        $message = str_replace("tokenttp",$sTTP,$message);

        $message = str_replace("tokentp",$sTP,$message);

        $message = str_replace("tokengpkdngay",$sGPKDngay,$message);
        $message = str_replace("tokengpkdthang",$sGPKDthang,$message);
        $message = str_replace("tokengpkdnam",$sGPKDnam,$message);
        

        $message = str_replace("tokenkyhieuhd",$skhhd,$message); 
        $message = str_replace("tokenchicucthuekv",$skvtql ,$message); 
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
?>
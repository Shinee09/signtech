// VINA SmartSign
function validateFormVINA() {

    var iChars = "&<";
    for (var i = 0; i < document.formVINA.CTY.value.length; i++) {
        if (iChars.indexOf(document.formVINA.CTY.value.charAt(i)) != -1) {

                

            formVINA.CTY.focus();
            return false;
        }
    }
    for (var i = 0; i < document.formVINA.DC.value.length; i++) {
        if (iChars.indexOf(document.formVINA.DC.value.charAt(i)) != -1) {
            $(document).ready(function () {
                $('#alert-diachi').show('fade');

                setTimeout(function () {
                    $('#alert-diachi').hide('fade');
                }, 15000);

                $('#linkClose0').click(function () {
                    $('#alert-diachi').hide('fade');
                });
            });
            formVINA.DC.focus();
            return false;
        }
    }
}



// VINA select dai ly
/*
$(function() {
    $("#selectBenC").change(function() {
        if ($(this).val() == 5) {
            $("#MSTc").removeAttr("disabled");
            $("#CTYc").removeAttr("disabled");
            $("#DCc").removeAttr("disabled");
            $("#GDc").removeAttr("disabled");
            $("#CVUc").removeAttr("disabled");
        } else {
            $("#MSTc").attr("disabled", "disabled");
            $("#CTYc").attr("disabled", "disabled");
            $("#DCc").attr("disabled", "disabled");
            $("#GDc").attr("disabled", "disabled");
            $("#CVUc").attr("disabled", "disabled");
        }
    });
});
*/

function selectVINAC(obj) {
    var value = obj.value;
    var mstc = document.getElementById('MSTc');
    var ctyc = document.getElementById('CTYc');
    var dcc = document.getElementById('DCc');
    var gdc = document.getElementById('GDc');
    if (value === '1') {
        mstc.value = "0314532703";
        ctyc.value = "CÔNG TY TNHH CÔNG NGHỆ SIGNTECH";
        dcc.value = "101/58/16 Nguyễn Văn Đậu, Phường 5, Quận Bình Thạnh, Thành Phố Hồ Chí Minh, Việt Nam";
        gdc.value = "NGUYỄN THẾ THẾ";
    } else if (value === '2') {
        mstc.value = "0313282627";
        ctyc.value = "CÔNG TY TNHH TRUYỀN THÔNG BẢO AN";
        dcc.value = "101/58/16 Nguyễn Văn Đậu, Phường 5, Quận Bình Thạnh, Thành Phố Hồ Chí Minh, Việt Nam";
        gdc.value = "NGUYỄN THẾ THẾ";
    } else if (value === '3') {
        mstc.value = "0315958170";
        ctyc.value = "CÔNG TY TNHH CÔNG NGHỆ SỐ E-SIGN";
        dcc.value = "101/58/16 Nguyễn Văn Đậu, Phường 5, Quận Bình Thạnh, Thành Phố Hồ Chí Minh, Việt Nam";
        gdc.value = "NGUYỄN THỊ TRÀ MY";
    } else if (value === '4') {
        mstc.value = "0315450845";
        ctyc.value = "CÔNG TY TNHH KỸ THUẬT CHỮ KÝ SỐ VIỆT NAM";
        dcc.value = "126 Nguyễn Tất Thành, Phường 13, Quận 4, Thành phố Hồ Chí Minh, Việt Nam";
        gdc.value = "NGUYỄN KHÁNH QUÂN";
    } else if (value === '5') {
        mstc.value = "";
        ctyc.value = "";
        dcc.value = "";
        gdc.value = "";
    }
}

// End VINA SmartSign

// EFY-CA
// function genderChangedEFY(obj) {
//     var message = document.getElementById('showEFYGC');
//     var value = obj.value;
//     if (value === '0') {
//         message.innerHTML = "Bạn chưa chọn gói cước";
//     } else if (value === '1') {
//         message.innerHTML = "1.830.000đ";
//     } else if (value === '2') {
//         message.innerHTML = "2.730.000đ";
//     } else if (value === '3') {
//         message.innerHTML = "3.080.000đ";
//     } else if (value === '4') {
//         message.innerHTML = "1.280.000đ";
//     } else if (value === '5') {
//         message.innerHTML = "2.180.000đ";
//     } else if (value === '6') {
//         message.innerHTML = "2.880.000đ";
//     }
// }
function validateFormEFY() {
    var iChars = "&<";
    var ttp = document.getElementById("ttp");
    for (var i = 0; i < document.formEFY.CTY.value.length; i++) {
        if (iChars.indexOf(document.formEFY.CTY.value.charAt(i)) != -1) {
            $(document).ready(function () {
                $('#alert-tencongty').show('fade');

                setTimeout(function () {
                    $('#alert-tencongty').hide('fade');
                }, 15000);

                $('#linkClose').click(function () {
                    $('#alert-tencongty').hide('fade');
                });
            });
            formEFY.CTY.focus();
            return false;
        }
    }
    for (var i = 0; i < document.formEFY.DC.value.length; i++) {
        if (iChars.indexOf(document.formEFY.DC.value.charAt(i)) != -1) {
            $(document).ready(function () {
                $('#alert-diachi').show('fade');

                setTimeout(function () {
                    $('#alert-diachi').hide('fade');
                }, 15000);

                $('#linkClose0').click(function () {
                    $('#alert-diachi').hide('fade');
                });
            });
            formEFY.DC.focus();
            return false;
        }
    }

    $(".btn-download-pdf").hide('fade', function () {
        $('#efy-load-pdf').show('fade');
        setTimeout(function () {
            $('#efy-load-pdf').hide('fade');
            $(".btn-download-pdf").show('fade');
        }, 15000);
    });
}

// FPT-CA



function validateFormFPT() {
    addEventListener("keyup", function(event) {
        document.formFPT.CTY.value = document.formFPT.CTY.value.toUpperCase();
     });

    console.log(document.formFPT.CTY.value);
    var iChars = "&<";
    for (var i = 0; i < document.formFPT.CTY.value.length; i++) {
        if (iChars.indexOf(document.formFPT.CTY.value.charAt(i)) != -1) {
            $(document).ready(function () {
                $('#alert-tencongty').show('fade');

                setTimeout(function () {
                    $('#alert-tencongty').hide('fade');
                }, 15000);

                $('#linkClose').click(function () {
                    $('#alert-tencongty').hide('fade');
                });
            });
            formFPT.CTY.focus();
            return false;
        }
    }

    for (var i = 0; i < document.formFPT.DC.value.length; i++) {
        if (iChars.indexOf(document.formFPT.DC.value.charAt(i)) != -1) {
            $(document).ready(function () {
                $('#alert-diachi').show('fade');

                setTimeout(function () {
                    $('#alert-diachi').hide('fade');
                }, 15000);

                $('#linkClose0').click(function () {
                    $('#alert-diachi').hide('fade');
                });
            });
            formFPT.DC.focus();
            return false;
        }
    }

    $(".btn-download-pdf").hide('fade', function () {
        $('#fpt-load-pdf').show('fade');
        setTimeout(function () {
            $('#fpt-load-pdf').hide('fade');
            $(".btn-download-pdf").show('fade');
        }, 15000);
    });
}
/*
$(function() {
    $("#selectBenCFPT").change(function() {
        if ($(this).val() == 5) {
            $("#MSTc2").removeAttr("disabled");
            $("#CTYc2").removeAttr("disabled");
            $("#DCc2").removeAttr("disabled");
            $("#GDc2").removeAttr("disabled");
            $("#CVUc2").removeAttr("disabled");
        } else {
            $("#MSTc2").attr("disabled", "disabled");
            $("#CTYc2").attr("disabled", "disabled");
            $("#DCc2").attr("disabled", "disabled");
            $("#GDc2").attr("disabled", "disabled");
            $("#CVUc2").attr("disabled", "disabled");
        }
    });
});
*/
function selectFPTC(obj) {
    var value = obj.value;
    var mstc2 = document.getElementById("MSTc2");
    var ctyc2 = document.getElementById('CTYc2');
    var dcc2 = document.getElementById('DCc2');
    var gdc2 = document.getElementById('GDc2');

    if (value === '1') {
        mstc2.value = "0314532703"
        ctyc2.value = "CÔNG TY TNHH CÔNG NGHỆ SIGNTECH"
        dcc2.value = "101/58/16 Nguyễn Văn Đậu, Phường 5, Quận Bình Thạnh, Thành Phố Hồ Chí Minh, Việt Nam"
        gdc2.value = "NGUYỄN THẾ THẾ"
    } else if (value === '2') {
        mstc2.value = "0313282627"
        ctyc2.value = "CÔNG TY TNHH TRUYỀN THÔNG BẢO AN"
        dcc2.value = "101/58/16 Nguyễn Văn Đậu, Phường 5, Quận Bình Thạnh, Thành Phố Hồ Chí Minh, Việt Nam"
        gdc2.value = "NGUYỄN THẾ THẾ"
    } else if (value === '3') {
        mstc2.value = "0315958170"
        ctyc2.value = "CÔNG TY TNHH CÔNG NGHỆ SỐ E-SIGN"
        dcc2.value = "101/58/16 Nguyễn Văn Đậu, Phường 5, Quận Bình Thạnh, Thành Phố Hồ Chí Minh, Việt Nam"
        gdc2.value = "NGUYỄN THỊ TRÀ MY"
    } else if (value === '4') {
        mstc2.value = "0315450845"
        ctyc2.value = "CÔNG TY TNHH KỸ THUẬT CHỮ KÝ SỐ VIỆT NAM"
        dcc2.value = "126 Nguyễn Tất Thành, Phường 13, Quận 4, Thành phố Hồ Chí Minh, Việt Nam"
        gdc2.value = "NGUYỄN KHÁNH QUÂN"
    } else if (value === '5') {
        mstc2.value = ""
        ctyc2.value = ""
        dcc2.value = ""
        gdc2.value = ""
    }
}



//EasyCA
// function genderEasyCAChanged(obj) {
//     var message = document.getElementById('showEasyCAGC');
//     var value = obj.value;
//     if (value === '0') {
//         message.innerHTML = "Bạn chưa chọn gói cước";
//     } else if (value === '1') {
//         message.innerHTML = "1.680.000đ";
//     } else if (value === '2') {
//         message.innerHTML = "2.480.000đ";
//     } else if (value === '3') {
//         message.innerHTML = "2.800.000đ";
//     } else if (value === '4') {
//         message.innerHTML = "---";
//     } else if (value === '5') {
//         message.innerHTML = "1.180.000đ";
//     } else if (value === '6') {
//         message.innerHTML = "1.980.000đ";
//     } else if (value === '7') {
//         message.innerHTML = "2.600.000đ";
//     } else if (value === '8') {
//         message.innerHTML = "---";
//     }
// }

function validateFormEasyCA() {
    var iChars = "&<";
    for (var i = 0; i < document.formEasy.CTY.value.length; i++) {
        if (iChars.indexOf(document.formEasy.CTY.value.charAt(i)) != -1) {
            $(document).ready(function () {
                $('#alert-tencongty').show('fade');

                setTimeout(function () {
                    $('#alert-tencongty').hide('fade');
                }, 15000);

                $('#linkClose').click(function () {
                    $('#alert-tencongty').hide('fade');
                });
            });
            formEasy.CTY.focus();
            return false;
        }
    }
    for (var i = 0; i < document.formEasy.DC.value.length; i++) {
        if (iChars.indexOf(document.formEasy.DC.value.charAt(i)) != -1) {
            $(document).ready(function () {
                $('#alert-diachi').show('fade');

                setTimeout(function () {
                    $('#alert-diachi').hide('fade');
                }, 15000);

                $('#linkClose0').click(function () {
                    $('#alert-diachi').hide('fade');
                });
            });
            formEasy.DC.focus();
            return false;
        }
    }
    $(".btn-download-pdf").hide('fade', function () {
        $('#easy-load-pdf').show('fade');
        setTimeout(function () {
            $('#easy-load-pdf').hide('fade');
            $(".btn-download-pdf").show('fade');
        }, 15000);
    });
}

// CA2

function validateFormCA2() {
    var iChars = "&<";
    for (var i = 0; i < document.formCA2.CTY.value.length; i++) {
        if (iChars.indexOf(document.formCA2.CTY.value.charAt(i)) != -1) {
            $(document).ready(function () {
                $('#alert-tencongty').show('fade');

                setTimeout(function () {
                    $('#alert-tencongty').hide('fade');
                }, 15000);

                $('#linkClose').click(function () {
                    $('#alert-tencongty').hide('fade');
                });
            });
            formCA2.CTY.focus();
            return false;
        }
    }
    for (var i = 0; i < document.formCA2.DC.value.length; i++) {
        if (iChars.indexOf(document.formCA2.DC.value.charAt(i)) != -1) {
            $(document).ready(function () {
                $('#alert-diachi').show('fade');

                setTimeout(function () {
                    $('#alert-diachi').hide('fade');
                }, 15000);

                $('#linkClose0').click(function () {
                    $('#alert-diachi').hide('fade');
                });
            });
            formCA2.DC.focus();
            return false;
        }
    }
    $(".btn-download-pdf").hide('fade', function () {
        $('#ca2-load-pdf').show('fade');
        setTimeout(function () {
            $('#ca2-load-pdf').hide('fade');
            $(".btn-download-pdf").show('fade');
        }, 15000);
    });
}

function showThanhTienCA2(obj) {
    var message = document.getElementById('showCA2GC');
    var value = obj.value;
    if (value === '0') {
        message.innerHTML = "Bạn chưa chọn gói cước";
    } else if (value === '1') {
        message.innerHTML = "1.827.100đ";
    } else if (value === '2') {
        message.innerHTML = "2.741.200đ";
    } else if (value === '3') {
        message.innerHTML = "3.110.800đ";
    } else if (value === '4') {
        message.innerHTML = "1.277.100đ";
    } else if (value === '5') {
        message.innerHTML = "2.191.200đ";
    } else if (value === '6') {
        message.innerHTML = "2.907.300đ";
    }
}

// NewTel-CA-FastCA
function validateFormNewTel() {

    var iChars = "&<";
    for (var i = 0; i < document.formNewTel.CTY.value.length; i++) {
        if (iChars.indexOf(document.formNewTel.CTY.value.charAt(i)) != -1) {
            $(document).ready(function () {
                $('#alert-tencongty').show('fade');

                setTimeout(function () {
                    $('#alert-tencongty').hide('fade');
                }, 15000);

                $('#linkClose').click(function () {
                    $('#alert-tencongty').hide('fade');
                });
            });
            formNewTel.CTY.focus();
            return false;
        }
    }

    for (var i = 0; i < document.formNewTel.SNPXFAST.value.length; i++) {
        if (iChars.indexOf(document.formNewTel.SNPXFAST.value.charAt(i)) != -1) {
            $(document).ready(function () {
                $('#alert-diachi').show('fade');

                setTimeout(function () {
                    $('#alert-diachi').hide('fade');
                }, 15000);

                $('#linkClose0').click(function () {
                    $('#alert-diachi').hide('fade');
                });
            });
            formNewTel.SNPXFAST.focus();
            return false;
        }
    }

    // kiểm tra địa chỉ số nhà, tên đường, phường/xã 
    var str = document.getElementById('SNPXFAST').value;
    var until = str.search("Quận ");
    var until2 = str.search("Thành phố ");
    var until3 = str.search("Huyện ");
    var until4 = str.search(", Tỉnh ");
    var until5 = str.search("TP ");
    var until6 = str.search("- Tỉnh ");
    var until7 = str.search("Thành Phố ");
    if (until > -1) {
        $(document).ready(function () {
            $('#alert-new-quan').show('fade');

            setTimeout(function () {
                $('#alert-new-quan').hide('fade');
            }, 15000);

            $('#linkClose2').click(function () {
                $('#alert-new-quan').hide('fade');
            });
        });
        formNewTel.SNPXFAST.focus();
        return false;
    } else if (until2 > -1) {
        $(document).ready(function () {
            $('#alert-new-thanhpho').show('fade');

            setTimeout(function () {
                $('#alert-new-thanhpho').hide('fade');
            }, 15000);

            $('#linkClose3').click(function () {
                $('#alert-new-thanhpho').hide('fade');
            });
        });
        formNewTel.SNPXFAST.focus();
        return false;
    } else if (until3 > -1) {
        $(document).ready(function () {
            $('#alert-new-huyen').show('fade');

            setTimeout(function () {
                $('#alert-new-huyen').hide('fade');
            }, 15000);

            $('#linkClose4').click(function () {
                $('#alert-new-huyen').hide('fade');
            });
        });
        formNewTel.SNPXFAST.focus();
        return false;
    } else if (until4 > -1) {
        $(document).ready(function () {
            $('#alert-new-tinh').show('fade');

            setTimeout(function () {
                $('#alert-new-tinh').hide('fade');
            }, 15000);

            $('#linkClose5').click(function () {
                $('#alert-new-tinh').hide('fade');
            });
        });
        formNewTel.SNPXFAST.focus();
        return false;
    } else if (until5 > -1) {
        $(document).ready(function () {
            $('#alert-new-tp').show('fade');

            setTimeout(function () {
                $('#alert-new-tp').hide('fade');
            }, 15000);

            $('#linkClose7').click(function () {
                $('#alert-new-tp').hide('fade');
            });
        });
        formNewTel.SNPXFAST.focus();
        return false;
    } else if (until6 > -1) {
        $(document).ready(function () {
            $('#alert-new-tinh').show('fade');

            setTimeout(function () {
                $('#alert-new-tinh').hide('fade');
            }, 15000);

            $('#linkClose5').click(function () {
                $('#alert-new-tinh').hide('fade');
            });
        });
        formNewTel.SNPXFAST.focus();
        return false;
    } else if (until7 > -1) {
        $(document).ready(function () {
            $('#alert-new-thanhpho').show('fade');

            setTimeout(function () {
                $('#alert-new-thanhpho').hide('fade');
            }, 15000);

            $('#linkClose3').click(function () {
                $('#alert-new-thanhpho').hide('fade');
            });
        });
        formNewTel.SNPXFAST.focus();
        return false;
    }

    $(".btn-download-pdf").hide('fade', function () {
        $('#fast-load-pdf').show('fade');
        setTimeout(function () {
            $('#fast-load-pdf').hide('fade');
            $(".btn-download-pdf").show('fade');
        }, 15000);
    });
}

function showThanhTienFast(obj) {
    var message = document.getElementById('showFastGC');
    var value = obj.value;
    if (value === '0') {
        message.innerHTML = "Bạn chưa chọn gói cước";
    } else if (value === '1') {
        message.innerHTML = "1.827.100đ";
    } else if (value === '2') {
        message.innerHTML = "2.740.000đ";
    } else if (value === '3') {
        message.innerHTML = "3.110.000đ";
    } else if (value === '4') {
        message.innerHTML = "1.277.000đ";
    } else if (value === '5') {
        message.innerHTML = "2.190.000đ";
    } else if (value === '6') {
        message.innerHTML = "2.910.000đ";
    } else if (value === '7') {
        message.innerHTML = "1.277.000đ";
    } else if (value === '8') {
        message.innerHTML = "2.190.000đ";
    } else if (value === '9') {
        message.innerHTML = "2.910.000đ";
    }
}
// Select dai ly NewCA
function selectNewC(obj) {
    var value = obj.value;
    var mstc3 = document.getElementById("MST-Hd-New");
    var ctyc3 = document.getElementById('CTY-Hd-New');
    var dcc3 = document.getElementById('DC-Hd-New');
    var gdc3 = document.getElementById('GD-Hd-New');
    if (value === '1') {
        mstc3.value = "0314532703"
        ctyc3.value = "CÔNG TY TNHH CÔNG NGHỆ SIGNTECH"
        dcc3.value = "101/58/16 Nguyễn Văn Đậu, Phường 5, Quận Bình Thạnh, Thành Phố Hồ Chí Minh, Việt Nam"
        gdc3.value = "NGUYỄN THẾ THẾ"
    } else if (value === '2') {
        mstc3.value = "0313282627"
        ctyc3.value = "CÔNG TY TNHH TRUYỀN THÔNG BẢO AN"
        dcc3.value = "101/58/16 Nguyễn Văn Đậu, Phường 5, Quận Bình Thạnh, Thành Phố Hồ Chí Minh, Việt Nam"
        gdc3.value = "NGUYỄN THẾ THẾ"
    } else if (value === '3') {
        mstc3.disable = true;
        mstc3.value = "0315958170"
        ctyc3.value = "CÔNG TY TNHH CÔNG NGHỆ SỐ E-SIGN"
        dcc3.value = "101/58/16 Nguyễn Văn Đậu, Phường 5, Quận Bình Thạnh, Thành Phố Hồ Chí Minh, Việt Nam"
        gdc3.value = "NGUYỄN THỊ TRÀ MY"
    } else if (value === '4') {
        mstc3.value = "0315450845"
        ctyc3.value = "CÔNG TY TNHH KỸ THUẬT CHỮ KÝ SỐ VIỆT NAM"
        dcc3.value = "126 Nguyễn Tất Thành, Phường 13, Quận 4, Thành phố Hồ Chí Minh, Việt Nam"
        gdc3.value = "NGUYỄN KHÁNH QUÂN"
    } else if (value === '5') {
        mstc3.value = "";
        ctyc3.value = ""
        dcc3.value = ""
        gdc3.value = ""
    }
}


// VINRA
function validateFormVIN() {
    var iChars = "&<";
    for (var i = 0; i < document.formVIN.CTY.value.length; i++) {
        if (iChars.indexOf(document.formVIN.CTY.value.charAt(i)) != -1) {
            $(document).ready(function () {
                $('#alert-tencongty').show('fade');

                setTimeout(function () {
                    $('#alert-tencongty').hide('fade');
                }, 15000);

                $('#linkClose').click(function () {
                    $('#alert-tencongty').hide('fade');
                });
            });
            formVIN.CTY.focus();
            return false;
        }
    }
    for (var i = 0; i < document.formVIN.DC.value.length; i++) {
        if (iChars.indexOf(document.formVIN.DC.value.charAt(i)) != -1) {
            $(document).ready(function () {
                $('#alert-diachi').show('fade');

                setTimeout(function () {
                    $('#alert-diachi').hide('fade');
                }, 15000);

                $('#linkClose0').click(function () {
                    $('#alert-diachi').hide('fade');
                });
            });
            formVIN.DC.focus();
            return false;
        }
    }
    $(".btn-download-pdf").hide('fade', function () {
        $('#vinra-load-pdf').show('fade');
        setTimeout(function () {
            $('#vinra-load-pdf').hide('fade');
            $(".btn-download-pdf").show('fade');
        }, 15000);
    });
}

// QD HDDT
function validateFormQD() {
    var iChars = "&<";
    for (var i = 0; i < document.formQD.CTY.value.length; i++) {
        if (iChars.indexOf(document.formQD.CTY.value.charAt(i)) != -1) {
            $(document).ready(function () {
                $('#alert-tencongty').show('fade');

                setTimeout(function () {
                    $('#alert-tencongty').hide('fade');
                }, 15000);

                $('#linkClose').click(function () {
                    $('#alert-tencongty').hide('fade');
                });
            });
            formQD.CTY.focus();
            return false;
        }
    }

    var inputkhhd = document.getElementById('khhd').value;
    var chuankhhd = inputkhhd.search("/21E");

    if (chuankhhd < 1) {
        $(document).ready(function () {
            $('#alert-khhd').show('fade');

            setTimeout(function () {
                $('#alert-khhd').hide('fade');
            }, 15000);

            $('#linkClose6').click(function () {
                $('#alert-khhd').hide('fade');
            });
        });
        formQD.khhd.focus();
        return false;
    }
}

$(function () {
    $('[data-toggle="popover"]').popover()
})
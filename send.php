<?php

include("identitas.php");
include("classes/class.phpmailer.php");

$mail = new PHPMailer; 
//$mail->IsSMTP();
//$mail->SMTPSecure	= 'ssl'; 
//$mail->Host 		= $host; //host masing2 provider email
//$mail->SMTPDebug 	= 2;
//$mail->Port 		= 465;
//$mail->SMTPAuth 	= true;
//$mail->Username 	= $username; //user email
//$mail->Password 	= $password; //password email 
$mail->IsMail();
$mail->From 		= $username; 
$mail->FromName 	= $namasend;
$mail->AddAddress($email, $namamu);
$mail->IsHTML(true);

if(isset($_GET['response'])){
    $response = $_GET['response'];
    if($response == "1"){
    $message = '
<!DOCTYPE html> <html lang="it"> <head> <meta http-equiv="content-type" content="text/html; charset=UTF-8"> <title>Email Respon Webshot</title> <meta charset="utf-8"> <meta name="viewport" content="width=device-width"> <style type="text/css">#ko_onecolumnBlock_3 .textintenseStyle a, #ko_onecolumnBlock_3 .textintenseStyle a:link, #ko_onecolumnBlock_3 .textintenseStyle a:visited, #ko_onecolumnBlock_3 .textintenseStyle a:hover {color: #fff;color: ;text-decoration: none;text-decoration: none;font-weight: bold;} #ko_onecolumnBlock_3 .textlightStyle a, #ko_onecolumnBlock_3 .textlightStyle a:link, #ko_onecolumnBlock_3 .textlightStyle a:visited, #ko_onecolumnBlock_3 .textlightStyle a:hover {color: #3f3d33;color: ;text-decoration: none;text-decoration: ;font-weight: bold;}</style> <style type="text/css"> /* CLIENT-SPECIFIC STYLES */ #outlook a{padding:0;} /* Force Outlook to provide a "view in browser" message */ .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */ .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height: 100%;} /* Force Hotmail to display normal line spacing */ body, table, td, a{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;} /* Prevent WebKit and Windows mobile changing default text sizes */ table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up */ img{-ms-interpolation-mode:bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */body{margin:0; padding:0;} img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;} table{border-collapse:collapse !important;} body{height:100% !important; margin:0; padding:0; width:100% !important;} /* iOS BLUE LINKS */ .appleBody a{color:#68440a; text-decoration: none;} .appleFooter a{color:#999999; text-decoration: none;}

 /* MOBILE STYLES */ @media screen and (max-width: 525px) {

 /* ALLOWS FOR FLUID TABLES */ table[class="wrapper"]{ width:100% !important; min-width:0px !important; }

 /* USE THESE CLASSES TO HIDE CONTENT ON MOBILE */ td[class="mobile-hide"]{ display:none;}

 img[class="mobile-hide"]{ display: none !important; }

 img[class="img-max"]{ width:100% !important; max-width: 100% !important; height:auto !important; }

 /* FULL-WIDTH TABLES */ table[class="responsive-table"]{ width:100%!important; }

 /* UTILITY CLASSES FOR ADJUSTING PADDING ON MOBILE */ td[class="padding"]{ padding: 10px 5% 15px 5% !important; }

 td[class="padding-copy"]{ padding: 10px 5% 10px 5% !important; text-align: center; }

 td[class="padding-meta"]{ padding: 30px 5% 0px 5% !important; text-align: center; }

 td[class="no-pad"]{ padding: 0 0 0px 0 !important; }

 td[class="no-padding"]{ padding: 0 !important; }

 td[class="section-padding"]{ padding: 10px 15px 10px 15px !important; }

 td[class="section-padding-bottom-image"]{ padding: 10px 15px 0 15px !important; }

 /* ADJUST BUTTONS ON MOBILE */ td[class="mobile-wrapper"]{ padding: 10px 5% 15px 5% !important; }

 table[class="mobile-button-container"]{ margin:0 auto; width:100% !important; }

 a[class="mobile-button"]{ width:80% !important; padding: 15px !important; border: 0 !important; font-size: 16px !important; }

 } </style> </head> <body style="margin: 0; padding: 0;" bgcolor="#ffffff" align="center">

<!-- PREHEADER -->

<table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 530px;" id="ko_preheaderBlock_1"><tbody><tr> <td bgcolor="#007ea8" class="mobile-hide"> <div align="center" style="padding: 0px 15px 0px 15px;"> <table border="0" cellpadding="0" cellspacing="0" width="500" style="min-width: 500px;" class="wrapper"> <!--Preheade/view on web TEXT --><tbody><tr> <td style="padding: 10px 0px 10px 0px;"> <table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr> <td bgcolor="#007ea8" width="50%" align="left" class="mobile-hide"> <table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr> <td align="left" style="padding: 0 0 5px 0; font-size: 12px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none;"><span style="color: #ffffff; text-decoration: none;">'.$namasend.'</span></td> </tr></tbody></table> </td> <td bgcolor="#007ea8" width="50%" align="right" class="mobile-hide"> <table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr> <td align="right" style="padding: 0 0 5px 0; font-size: 12px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none;"><a href="%5Bshow_link%5D" style="color: #ffffff;" target="_new"><span>'.$username.'</span></a></td> </tr></tbody></table> </td> </tr></tbody></table> </td> </tr></tbody> </table> </div> </td> </tr></tbody></table> <table border="0" cellpadding="0" cellspacing="0" width="100%" id="ko_onecolumnBlock_3"><tbody><tr class="row-a"> <td bgcolor="#daede7" align="center" class="section-padding" style="padding-top: 30px; padding-left: 15px; padding-bottom: 30px; padding-right: 15px;"> <table border="0" cellpadding="0" cellspacing="0" width="500" class="responsive-table"><tbody><tr> <td> <table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody> <tr> <td> <!-- COPY --> <table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody> <tr> <td align="center" class="padding-copy" style="font-size: 25px; font-family: Helvetica, Arial, sans-serif; color: #3F3D33; padding-top: 0px;">Respon dari '.$namapanjang.'</td> </tr> <tr> <td align="center" class="padding-copy textlightStyle" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #3F3D33;"> <p style="margin:0px;" data-mce-style="margin: 0px;">'.$namamu.', Kamu mendapatkan balasan dari '.$namapanjang.' yang intinya:</p> <p style="margin:0px;" data-mce-style="margin: 0px;"><br data-mce-bogus="1"></p> <p style="margin:0px;" data-mce-style="margin: 0px;"><b>DIA MENERIMAMU </b></p> <p style="margin:0px;" data-mce-style="margin: 0px;"><b><br data-mce-bogus="1"></b></p> <p style="margin:0px;" data-mce-style="margin: 0px;"><strong></strong>Heran gw mau maunya dia sama lu<br></p> <p style="margin:0px;" data-mce-style="margin: 0px;"><br data-mce-bogus="1"></p> <p style="margin:0px;" data-mce-style="margin: 0px;">Salam Hangat</p> <p style="margin:0px;" data-mce-style="margin: 0px;"><br></p> <p style="margin:0px;" data-mce-style="margin: 0px;"><br data-mce-bogus="1">'.$namasend.'</p> </td> </tr> </tbody></table> </td> </tr> </tbody></table> </td> </tr></tbody></table> </td> </tr></tbody></table> </body> </html>'; 

$text = '<?php 
$permission = 0; // GANTI MENJADI 1 BILA INGIN DIGUNAKAN KEMBALI 
$thanks = 1; // JANGAN UBAH INI, KARENA INI OTOMATIS BERUBAH JIKA RESPON MEMILIH YA ATAU TIDAK ?>'; }elseif($response == "2"){ $message = ' <!DOCTYPE html> <html lang="it"> <head> <meta http-equiv="content-type" content="text/html; charset=UTF-8"> <title>Email Respon Webshot</title> <meta charset="utf-8"> <meta name="viewport" content="width=device-width"> <style type="text/css">#ko_onecolumnBlock_3 .textintenseStyle a, #ko_onecolumnBlock_3 .textintenseStyle a:link, #ko_onecolumnBlock_3 .textintenseStyle a:visited, #ko_onecolumnBlock_3 .textintenseStyle a:hover {color: #fff;color: ;text-decoration: none;text-decoration: none;font-weight: bold;} #ko_onecolumnBlock_3 .textlightStyle a, #ko_onecolumnBlock_3 .textlightStyle a:link, #ko_onecolumnBlock_3 .textlightStyle a:visited, #ko_onecolumnBlock_3 .textlightStyle a:hover {color: #3f3d33;color: ;text-decoration: none;text-decoration: ;font-weight: bold;}</style> <style type="text/css"> /* CLIENT-SPECIFIC STYLES */ #outlook a{padding:0;} /* Force Outlook to provide a "view in browser" message */ .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */ .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height: 100%;} /* Force Hotmail to display normal line spacing */ body, table, td, a{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;} /* Prevent WebKit and Windows mobile changing default text sizes */ table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up */ img{-ms-interpolation-mode:bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */
 /* RESET STYLES */ body{margin:0; padding:0;} img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;} table{border-collapse:collapse !important;} body{height:100% !important; margin:0; padding:0; width:100% !important;}

 /* iOS BLUE LINKS */ .appleBody a{color:#68440a; text-decoration: none;} .appleFooter a{color:#999999; text-decoration: none;}

 /* MOBILE STYLES */ @media screen and (max-width: 525px) {

 /* ALLOWS FOR FLUID TABLES */ table[class="wrapper"]{ width:100% !important; min-width:0px !important; }

 /* USE THESE CLASSES TO HIDE CONTENT ON MOBILE */ td[class="mobile-hide"]{ display:none;}

 img[class="mobile-hide"]{ display: none !important; }

 img[class="img-max"]{ width:100% !important; max-width: 100% !important; height:auto !important; }

 /* FULL-WIDTH TABLES */ table[class="responsive-table"]{ width:100%!important; }

 /* UTILITY CLASSES FOR ADJUSTING PADDING ON MOBILE */ td[class="padding"]{ padding: 10px 5% 15px 5% !important; }

 td[class="padding-copy"]{ padding: 10px 5% 10px 5% !important; text-align: center; }

 td[class="padding-meta"]{ padding: 30px 5% 0px 5% !important; text-align: center; }td[class="no-pad"]{ padding: 0 0 0px 0 !important; } td[class="no-padding"]{ padding: 0 !important; } td[class="section-padding"]{ padding: 10px 15px 10px 15px !important; } td[class="section-padding-bottom-image"]{ padding: 10px 15px 0 15px !important; } td[class="mobile-wrapper"]{ padding: 10px 5% 15px 5% !important; }table[class="mobile-button-container"]{ margin:0 auto; width:100% !important;}a[class="mobile-button"]{ width:80% !important; padding: 15px !important; border: 0 !important; font-size: 16px !important; }} </style> </head> <body style="margin: 0; padding: 0;" bgcolor="#ffffff" align="center"><table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 530px;" id="ko_preheaderBlock_1"><tbody><tr> <td bgcolor="#007ea8" class="mobile-hide"> <div align="center" style="padding: 0px 15px 0px 15px;"> <table border="0" cellpadding="0" cellspacing="0" width="500" style="min-width: 500px;" class="wrapper"> <!--Preheade/view on web TEXT --><tbody><tr> <td style="padding: 10px 0px 10px 0px;"> <table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr> <td bgcolor="#007ea8" width="50%" align="left" class="mobile-hide"> <table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr> <td align="left" style="padding: 0 0 5px 0; font-size: 12px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none;"><span style="color: #ffffff; text-decoration: none;">'.$namasend.'</span></td> </tr></tbody></table> </td> <td bgcolor="#007ea8" width="50%" align="right" class="mobile-hide"> <table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr> <td align="right" style="padding: 0 0 5px 0; font-size: 12px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none;"><a href="%5Bshow_link%5D" style="color: #ffffff;" target="_new"><span>'.$username.'</span></a></td> </tr></tbody></table> </td> </tr></tbody></table> </td> </tr></tbody> </table> </div> </td> </tr></tbody></table> <table border="0" cellpadding="0" cellspacing="0" width="100%" id="ko_onecolumnBlock_3"><tbody><tr class="row-a"> <td bgcolor="#daede7" align="center" class="section-padding" style="padding-top: 30px; padding-left: 15px; padding-bottom: 30px; padding-right: 15px;"> <table border="0" cellpadding="0" cellspacing="0" width="500" class="responsive-table"><tbody><tr> <td> <table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody> <tr> <td> <!-- COPY --> <table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody> <tr> <td align="center" class="padding-copy" style="font-size: 25px; font-family: Helvetica, Arial, sans-serif; color: #3F3D33; padding-top: 0px;">Respon dari '.$namapanjang.'</td> </tr> <tr> <td align="center" class="padding-copy textlightStyle" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #3F3D33;"> <p style="margin:0px;" data-mce-style="margin: 0px;">'.$namamu.', Kamu mendapatkan balasan dari '.$namapanjang.' yang intinya:</p> <p style="margin:0px;" data-mce-style="margin: 0px;"><br data-mce-bogus="1"></p> <p style="margin:0px;" data-mce-style="margin: 0px;"><b>DIA BELUM MENERIMAMU </b></p> <p style="margin:0px;" data-mce-style="margin: 0px;"><b><br data-mce-bogus="1"></b></p> <p style="margin:0px;" data-mce-style="margin: 0px;"><strong></strong>Mampus kau<br></p> <p style="margin:0px;" data-mce-style="margin: 0px;"><br data-mce-bogus="1"></p> <p style="margin:0px;" data-mce-style="margin: 0px;">Salam Hangat</p> <p style="margin:0px;" data-mce-style="margin: 0px;"><br></p> <p style="margin:0px;" data-mce-style="margin: 0px;"><br data-mce-bogus="1">'.$namasend.'</p> </td> </tr> </tbody></table> </td> </tr> </tbody></table> </td> </tr></tbody></table> </td> </tr></tbody></table> </body> </html>';
        $text = '<?php
$permission = 0; // GANTI MENJADI 1 BILA INGIN DIGUNAKAN KEMBALI
$thanks     = 2; // JANGAN UBAH INI, KARENA INI OTOMATIS BERUBAH JIKA RESPON MEMILIH YA ATAU TIDAK
?>';
    }else{
        echo "Terjadi Kesalahan Konfigurasi, Respon Tidak Diberikan";
        die();
    }
    $subject = "[ $namasend ] Email Respon dari $namapanjang";
    $mail->Subject 	= $subject; 
    $mail->Body 		= $message;
    if(!$mail->Send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
    $file = fopen("permission.php","w");
        if($file)
        {
        fputs($file,$text);
        }
        fclose($file); 
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../thanks/">';
    exit;
}
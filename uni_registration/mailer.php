﻿<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP server
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'aualumniportal85@gmail.com';                 // SMTP username
    $mail->Password = 'Alumniportal1234';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('aualumniportal85@gmail.com', 'AU Alumni Portal');
    //$mail->addAddress('k164033@nu.edu.pk', 'Akif Hussain');     // Add a recipient
    $mail->addAddress('K164033@nu.edu.pk', 'Akif Hussain');
   // $mail->addAddress('ubaidurrehman225786@gmail.com');               // Name is optional
   // $mail->addReplyTo('no-reply@howcode.org', 'Information');
   // $mail->addCC('quaideazamfss123@gmail.com');
  //  $mail->addBCC('bcc@example.com');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('image1.png', 'new.png');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body = '<head>
    <title>Premium Beat | a shutterstock company</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <!--[if !mso]><!-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!--<![endif]-->
    <!--[if gte mso 9]>
    <xml>
      <o:OfficeDocumentSettings>
        <o:AllowPNG />
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    
  <style type="text/css">
		body{
			margin:0 !important;
			padding:0 !important;
			-webkit-text-size-adjust:100% !important;
			-ms-text-size-adjust:100% !important;
			-webkit-font-smoothing:antialiased !important;
		}
		img{
			border:0 !important;
			outline:none !important;
		}
		p{
			margin:0 !important;
			padding:0 !important;
		}
		table{
			border-collapse:collapse;
			mso-table-lspace:0;
			mso-table-rspace:0;
		}
		td,a,span{
			border-collapse:collapse;
			mso-line-height-rule:exactly;
		}
		.ExternalClass *{
			line-height:100%;
		}
		.em_defaultlink a{
			color:inherit !important;
			text-decoration:none !important;
		}
		span.MsoHyperlink{
			mso-style-priority:99;
			color:inherit;
		}
		span.MsoHyperlinkFollowed{
			mso-style-priority:99;
			color:inherit;
		}
		.em_footer a{
			color:#6b6b6b;
			text-decoration:none;
		}
	@media only screen and (min-width:481px) and (max-width:799px){
		.em_main_table{
			width:100% !important;
		}

}	@media only screen and (min-width:481px) and (max-width:799px){
		.em_wrapper{
			width:100% !important;
		}

}	@media only screen and (min-width:481px) and (max-width:799px){
		.em_side{
			width:10px !important;
		}

}	@media only screen and (min-width:481px) and (max-width:799px){
		.em_hide{
			display:none !important;
		}

}	@media only screen and (min-width:481px) and (max-width:799px){
		.em_height{
			height:20px !important;
			font-size:1px !important;
			line-height:1px !important;
		}

}	@media only screen and (min-width:481px) and (max-width:799px){
		.em_height2{
			height:50px !important;
			font-size:1px !important;
			line-height:1px !important;
		}

}	@media only screen and (min-width:481px) and (max-width:799px){
		.em_height3{
			height:30px !important;
			font-size:1px !important;
			line-height:1px !important;
		}

}	@media only screen and (min-width:481px) and (max-width:799px){
		.em_height4{
			height:90px !important;
			font-size:1px !important;
			line-height:1px !important;
		}

}	@media only screen and (min-width:481px) and (max-width:799px){
		.em_bg{
			height:auto !important;
		}

}	@media only screen and (min-width:481px) and (max-width:799px){
		.em_full_img{
			width:100% !important;
			height:auto !important;
		}

}	@media screen and (max-width: 480px){
		.em_main_table{
			width:100% !important;
		}

}	@media screen and (max-width: 480px){
		.em_wrapper{
			width:100% !important;
		}

}	@media screen and (max-width: 480px){
		.em_side{
			width:10px !important;
		}

}	@media screen and (max-width: 480px){
		.em_hide{
			display:none !important;
		}

}	@media screen and (max-width: 480px){
		.em_height{
			height:20px !important;
			font-size:1px !important;
			line-height:1px !important;
		}

}	@media screen and (max-width: 480px){
		.em_height2{
			height:50px !important;
			font-size:1px !important;
			line-height:1px !important;
		}

}	@media screen and (max-width: 480px){
		.em_height4{
			height:50px !important;
			font-size:1px !important;
			line-height:1px !important;
		}

}	@media screen and (max-width: 480px){
		.em_height3{
			height:30px !important;
			font-size:1px !important;
			line-height:1px !important;
		}

}	@media screen and (max-width: 480px){
		u+.em_body .em_full_wrap{
			width:100vw !important;
		}

}	@media screen and (max-width: 480px){
		.em_txt1{
			font-size:40px !important;
			line-height:42px !important;
		}

}	@media screen and (max-width: 480px){
		.em_txt2{
			font-size:13px !important;
			line-height:20px !important;
		}

}	@media screen and (max-width: 480px){
		.em_bg{
			height:auto !important;
		}

}	@media screen and (max-width: 480px){
		.em_full_img{
			width:100% !important;
			height:auto !important;
		}

}	@media screen and (max-width: 480px){
		.em_img1{
			width:190px !important;
			height:auto !important;
			max-width:none !important;
		}

}</style></head>
<body class="em_body" style="margin: 0px;padding: 0px;-webkit-text-size-adjust: 100% !important;-ms-text-size-adjust: 100% !important;-webkit-font-smoothing: antialiased !important;"
bgcolor="#ffffff">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="em_full_wrap" bgcolor="#ffffff" style="border-collapse: collapse;mso-table-lspace: 0;mso-table-rspace: 0;">
    <tbody>

        <tr>
            <td align="center" valign="top" bgcolor="#ffffff" style="border-collapse: collapse;mso-line-height-rule: exactly;">
                <table align="center" width="500" border="0" cellspacing="0" cellpadding="0" class="em_main_table"
                    style="width: 800px;border-collapse: collapse;mso-table-lspace: 0;mso-table-rspace: 0;" bgcolor="#000000">
                    <tbody>
                        <tr>
                            <td class="em_bg" align="center" valign="top" background="./1.jpeg" height="585" style="background-repeat: no-repeat;background-position: center top;background-size: 100%;border-collapse: collapse;mso-line-height-rule: exactly;">
                                <!--[if gte mso 9]>
                <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:800px;height:585px;">
                  <v:fill type="tile" src="https://gallery.mailchimp.com/542fde17ee1ccbec98dd7f656/images/fa4378ee-0106-4987-800f-f0b3bac6bc1c.jpg" color="#000000" />
                  <v:textbox inset="0,0,0,0">
                    <![endif]-->

                                <table align="center" width="800" border="0" cellspacing="0" cellpadding="0" class="em_wrapper"
                                    style="width: 800px;border-collapse: collapse;mso-table-lspace: 0;mso-table-rspace: 0;">
                                    <tbody>

                                        <tr>
                                            <td width="90" class="em_side" style="width: 90px;border-collapse: collapse;mso-line-height-rule: exactly;">&nbsp;</td>
                                            <td align="center" valign="top" style="border-collapse: collapse;mso-line-height-rule: exactly;">
                                                <table align="center" width="620" border="0" cellspacing="0"
                                                    cellpadding="0" class="em_wrapper" style="width: 620px;border-collapse: collapse;mso-table-lspace: 0;mso-table-rspace: 0;">
                                                    <tbody>
                                                        <tr>
                                                            <td height="58" style="height: 58px;border-collapse: collapse;mso-line-height-rule: exactly;"
                                                                class="em_height">&nbsp;</td>
                                                        </tr>

                                                        <tr>
                                                            <td height="205" style="height: 205px;border-collapse: collapse;mso-line-height-rule: exactly;"><img
                                                                    class="em_full_img" src="https://gallery.mailchimp.com/542fde17ee1ccbec98dd7f656/images/5c6765fc-a5bf-490b-9f7d-e073cac8257c.gif"
                                                                    width="620" height="205" alt="" style="display: block;max-width: 620px;border: 0 !important;outline: none !important;"
                                                                    border="0">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="em_txt1" align="center" valign="top" style="font-family:   , Poppins, Helvetica, Arial, sans-serif;font-size: 68px;line-height: 69px;color: #ffffff;font-weight: bold;border-collapse: collapse;mso-line-height-rule: exactly;">
                                                                Welcome To <br>
                                                                Alumni Portal</td>
                                                        </tr>
                                                        <tr>
                                                            <td height="10" style="font-size: 1px;line-height: 1px;height: 10px;border-collapse: collapse;mso-line-height-rule: exactly;">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="em_txt2" align="center" valign="top" style="font-family:   , Poppins, Helvetica, Arial, sans-serif;font-size: 16px;line-height: 25px;color: #ffffff;border-collapse: collapse;mso-line-height-rule: exactly;">Before
                                                                we get started, please take a second<br>
                                                                to verify your email.</td>
                                                        </tr>
                                                        <tr>
                                                            <td height="30" style="height: 30px;border-collapse: collapse;mso-line-height-rule: exactly;">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center" valign="top" style="border-collapse: collapse;mso-line-height-rule: exactly;">
                                                                <table align="center" width="200" border="0"
                                                                    cellspacing="0" cellpadding="0" style="border-collapse: collapse;mso-table-lspace: 0;mso-table-rspace: 0;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td align="right" valign="middle" width="20"
                                                                                style="border-collapse: collapse;mso-line-height-rule: exactly;"><img
                                                                                    src="https://gallery.mailchimp.com/542fde17ee1ccbec98dd7f656/images/4ea8f2b4-ab5e-4960-8865-3db1f25f7bd6.png"
                                                                                    width="20" height="40" alt=""
                                                                                    style="display: block;max-width: 20px;border: 0 !important;outline: none !important;"
                                                                                    border="0">
                                                                            </td>
                                                                            <td width="160" bgcolor="#dcad55" align="center"
                                                                                valign="middle" style="font-family:   , Poppins, Helvetica, Arial, sans-serif;font-size: 13px;height: 40px;color: #ffffff;font-weight: bold;border-collapse: collapse;mso-line-height-rule: exactly;">
                                                                                <a href="https://premiumbeat.us1.list-manage.com/subscribe/confirm?u=542fde17ee1ccbec98dd7f656&amp;id=06eeab03b0&amp;e=d233c51b2d"
                                                                                    target="_blank" style="line-height: 40px;color: #ffffff;text-decoration: none;display: block;border-collapse: collapse;mso-line-height-rule: exactly;">CONFIRM
                                                                                    YOUR EMAIL</a>
                                                                            </td>
                                                                            <td align="left" valign="middle" width="20"
                                                                                style="border-collapse: collapse;mso-line-height-rule: exactly;"><img
                                                                                    src="https://gallery.mailchimp.com/542fde17ee1ccbec98dd7f656/images/4dcdbe1f-f9ee-4711-ba82-297beba030d1.png"
                                                                                    width="20" height="40" alt=""
                                                                                    style="display: block;max-width: 20px;border: 0 !important;outline: none !important;"
                                                                                    border="0">
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="90" class="em_side" style="width: 90px;border-collapse: collapse;mso-line-height-rule: exactly;">&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--[if gte mso 9]>
                  </v:textbox>
                </v:rect>
                <![endif]-->
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top" style="border-collapse: collapse;mso-line-height-rule: exactly;">
                                <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse;mso-table-lspace: 0;mso-table-rspace: 0;">
                                    <tbody>
                                        <tr>
                                            <td align="center" valign="top" style="border-collapse: collapse;mso-line-height-rule: exactly;">
                                                <table align="center" width="100%" border="0" cellspacing="0"
                                                    cellpadding="0" style="border-collapse: collapse;mso-table-lspace: 0;mso-table-rspace: 0;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="140" class="em_side" style="width: 140px;border-collapse: collapse;mso-line-height-rule: exactly;">&nbsp;</td>
                                                            <td align="center" valign="top" style="border-collapse: collapse;mso-line-height-rule: exactly;">
                                                                <table align="center" width="100%" border="0"
                                                                    cellspacing="0" cellpadding="0" style="border-collapse: collapse;mso-table-lspace: 0;mso-table-rspace: 0;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td height="40" style="height: 40px;border-collapse: collapse;mso-line-height-rule: exactly;">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center" valign="top" style="font-family:   , Poppins, Helvetica, Arial, sans-serif;font-size: 12px;line-height: 18px;color: #7d7d7d;border-collapse: collapse;mso-line-height-rule: exactly;">If
                                                                                you didnt create a Alumni Portal
                                                                                account, just delete this
                                                                                email<br class="em_hide">
                                                                                and everything will go back to the
                                                                                way it was.</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td height="95" style="height: 95px;border-collapse: collapse;mso-line-height-rule: exactly;"
                                                                                class="em_height2">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center" valign="top" style="border-collapse: collapse;mso-line-height-rule: exactly;">
                                                                                <table align="center" border="0"
                                                                                    cellspacing="0" cellpadding="0"
                                                                                    style="border-collapse: collapse;mso-table-lspace: 0;mso-table-rspace: 0;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td align="center"
                                                                                                valign="middle"
                                                                                                style="border-collapse: collapse;mso-line-height-rule: exactly;">
                                                                                                <a href="#" target="_blank"
                                                                                                    style="text-decoration: none;border-collapse: collapse;mso-line-height-rule: exactly;"><img
                                                                                                        src="https://gallery.mailchimp.com/542fde17ee1ccbec98dd7f656/images/c21665a7-9474-4c3a-9ccc-50b47d20f74d.png"
                                                                                                        width="40"
                                                                                                        height="40"
                                                                                                        alt="fb"
                                                                                                        style="display: block;font-family: Arial, sans-serif;font-size: 12px;line-height: 15px;color: #ffffff;font-weight: bold;max-width: 40px;border: 0 !important;outline: none !important;"
                                                                                                        border="0"></a>
                                                                                            </td>
                                                                                            <td width="13" class="em_side"
                                                                                                style="width: 13px;border-collapse: collapse;mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                            <td align="center"
                                                                                                valign="middle"
                                                                                                style="border-collapse: collapse;mso-line-height-rule: exactly;">
                                                                                                <a href="#" target="_blank"
                                                                                                    style="text-decoration: none;border-collapse: collapse;mso-line-height-rule: exactly;"><img
                                                                                                        src="https://gallery.mailchimp.com/542fde17ee1ccbec98dd7f656/images/94fe17b1-c159-410e-adfb-f4ac12df2747.png"
                                                                                                        width="41"
                                                                                                        height="40"
                                                                                                        alt="tw"
                                                                                                        style="display: block;font-family: Arial, sans-serif;font-size: 12px;line-height: 15px;color: #ffffff;font-weight: bold;max-width: 40px;border: 0 !important;outline: none !important;"
                                                                                                        border="0"></a>
                                                                                            </td>
                                                                                            <td width="13" class="em_side"
                                                                                                style="width: 13px;border-collapse: collapse;mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                            <td align="center"
                                                                                                valign="middle"
                                                                                                style="border-collapse: collapse;mso-line-height-rule: exactly;">
                                                                                                <a href="#" target="_blank"
                                                                                                    style="text-decoration: none;border-collapse: collapse;mso-line-height-rule: exactly;"><img
                                                                                                        src="https://gallery.mailchimp.com/542fde17ee1ccbec98dd7f656/images/b13614aa-8039-4b1c-89e1-d5f7dafa4f7b.png"
                                                                                                        width="41"
                                                                                                        height="40"
                                                                                                        alt="yt"
                                                                                                        style="display: block;font-family: Arial, sans-serif;font-size: 12px;line-height: 15px;color: #ffffff;font-weight: bold;max-width: 40px;border: 0 !important;outline: none !important;"
                                                                                                        border="0"></a>
                                                                                            </td>
                                                                                            <td width="13" class="em_side"
                                                                                                style="width: 13px;border-collapse: collapse;mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                            <td align="center"
                                                                                                valign="middle"
                                                                                                style="border-collapse: collapse;mso-line-height-rule: exactly;">
                                                                                                <a href="#" target="_blank"
                                                                                                    style="text-decoration: none;border-collapse: collapse;mso-line-height-rule: exactly;"><img
                                                                                                        src="https://gallery.mailchimp.com/542fde17ee1ccbec98dd7f656/images/9d5bf3f1-3ae4-430a-8334-b5fbda4c1174.png"
                                                                                                        width="40"
                                                                                                        height="40"
                                                                                                        alt="ins"
                                                                                                        style="display: block;font-family: Arial, sans-serif;font-size: 12px;line-height: 15px;color: #ffffff;font-weight: bold;max-width: 40px;border: 0 !important;outline: none !important;"
                                                                                                        border="0"></a>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td height="32" style="height: 32px;border-collapse: collapse;mso-line-height-rule: exactly;">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center" valign="top" style="font-family: , Poppins, Helvetica, Arial, sans-serif;font-size: 11px;line-height: 14px;color: #ffffff;font-weight: bold;border-collapse: collapse;mso-line-height-rule: exactly;">Problems
                                                                                or questions? Email us at <a href="mailto:support@premiumbeat.com"
                                                                                    style="text-decoration: underline;color: #ddae4c;border-collapse: collapse;mso-line-height-rule: exactly;"
                                                                                    target="_blank">aualumniportal85@gmail.com</a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td height="30" style="height: 30px;border-collapse: collapse;mso-line-height-rule: exactly;">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td height="1" style="font-size: 1px;line-height: 1px;height: 1px;border-collapse: collapse;mso-line-height-rule: exactly;"
                                                                                bgcolor="#1a1a1a">&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                            <td width="140" class="em_side" style="width: 140px;border-collapse: collapse;mso-line-height-rule: exactly;">&nbsp;</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top" style="border-collapse: collapse;mso-line-height-rule: exactly;">
                                                <table align="center" width="100%" border="0" cellspacing="0"
                                                    cellpadding="0" style="border-collapse: collapse;mso-table-lspace: 0;mso-table-rspace: 0;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="90" class="em_side" style="width: 90px;border-collapse: collapse;mso-line-height-rule: exactly;">&nbsp;</td>
                                                            <td align="center" valign="top" style="border-collapse: collapse;mso-line-height-rule: exactly;">
                                                                <table align="center" width="100%" border="0"
                                                                    cellspacing="0" cellpadding="0" style="border-collapse: collapse;mso-table-lspace: 0;mso-table-rspace: 0;">
                                                                    <tbody>

                                                                        <tr>
                                                                            <td height="30" style="height: 30px;border-collapse: collapse;mso-line-height-rule: exactly;">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center" valign="top" style="font-family:   , Poppins, Helvetica, Arial, sans-serif;font-size: 12px;line-height: 15px;color: #cbcbcb;font-weight: 500;border-collapse: collapse;mso-line-height-rule: exactly;">
                                                                                <a href="#" target="_blank" style="color: #cbcbcb;text-decoration: underline;border-collapse: collapse;mso-line-height-rule: exactly;">FAQ</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <a href="/privacy-policy" target="_blank"
                                                                                    style="color: #cbcbcb;text-decoration: underline;border-collapse: collapse;mso-line-height-rule: exactly;">Privacy
                                                                                    Policy</a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td height="30" style="height: 30px;border-collapse: collapse;mso-line-height-rule: exactly;">&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                            <td width="90" class="em_side" style="width: 90px;border-collapse: collapse;mso-line-height-rule: exactly;">&nbsp;</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="em_hide" style="line-height: 1px;min-width: 800px;background-color: #000000;border-collapse: collapse;mso-line-height-rule: exactly;"><img
                                    alt="" src="https://gallery.mailchimp.com/542fde17ee1ccbec98dd7f656/images/8362e640-0caf-4a4f-a0e6-5eb28b3c2607.gif"
                                    height="1" width="800" style="max-height: 1px;min-height: 1px;display: block;width: 800px;min-width: 800px;border: 0 !important;outline: none !important;"
                                    border="0">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<div class="em_hide" style="white-space:nowrap;display:none;font-size:0px;line-height:0px;">&nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>


</body>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if ($mail->send()) {
        echo 'Message has been sent';
    }
} catch (Exception $e) {
    //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
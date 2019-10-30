<?php 
ini_set('max_execution_time', 300);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $university = $_POST['university'];
  $address = $_POST['address'];
  $description = $_POST['description'];

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
    //To
    $mail->addAddress('k164033@nu.edu.pk', 'Akif Hussain');
    
      //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Request to Approve Alumni Portal for '.$university.' University.';
    $mail->Body = '<head>
    <style>
    /* This styles you should add to your html as inline-styles */
  
    /* You can easily do it with http://inlinestyler.torchboxapps.com/ */
  
    /* Copy this html-window code converter and click convert button */
  
    /* After that you can remove this style from your code */
  
    body {
      color:white;
      margin: 0;
      padding: 0;
      background: blue;
      mso-line-height-rule: exactly;
      min-width: 100%;
    }
  
    .wrapper {
      display: table;
      table-layout: fixed;
      width: 100%;
      min-width: 220px;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }
  
    body,
    .wrapper {
      background-color: #ffffff;
    }
  
    /* Basic */
  
    table {
      border-collapse: collapse;
      border-spacing: 0;
    }
  
    table.center {
      margin: 0 auto;
      width: 402px;
    }
  
    td {
      padding: 0;
      vertical-align: top;
    }
  
    .spacer,
    .border {
      font-size: 1px;
      line-height: 1px;
    }
  
    .spacer {
      width: 100%;
      line-height: 16px
    }
  
    .border {
      background-color: #e0e0e0;
      width: 1px;
    }
  
    .padded {
      padding: 0 24px;
    }
  
    img {
      border: 0;
      -ms-interpolation-mode: bicubic;
    }
  
    .image {
      font-size: 12px;
    }
  
    .image img {
      display: block;
    }
  
    strong,
    .strong {
      font-weight: 700;
    }
  
    h1,
    h2,
    h3,
    p,
    ol,
    ul,
    li {
      margin-top: 0;
    }
  
    ol,
    ul,
    li {
      padding-left: 0;
    }
  
    a {
      text-decoration: none;
      color: #616161;
    }
  
    .btn {
      background-color: #2196F3;
      border: 1px solid #2196F3;
      border-radius: 2px;
      color: #ffffff;
      display: inline-block;
      font-family: Roboto, Helvetica, sans-serif;
      font-size: 14px;
      font-weight: 400;
      line-height: 36px;
      text-align: center;
      text-decoration: none;
      text-transform: uppercase;
      width: 200px;
      height: 36px;
      padding: 0 8px;
      margin: 0;
      outline: 0;
      outline-offset: 0;
      -webkit-text-size-adjust: none;
      mso-hide: all;
    }
  
    /* Top panel */
  
    .title {
      text-align: left;
    }
  
    .subject {
      text-align: right;
    }
  
    .title,
    .subject {
      width: 300px;
      padding: 8px 0;
      color: #616161;
      font-family: Roboto, Helvetica, sans-serif;
      font-weight: 400;
      font-size: 12px;
      line-height: 14px;
    }
  
    /* Header */
  
    .logo {
      padding: 16px 0;
    }
  
    /* Logo */
  
    .logo-image {}
  
    /* Main */
  
    .main {
      -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
      -moz-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
    }
  
    /* Content */
  
    .columns {
      margin: 0 auto;
      width: 600px;
      background-color: #ffffff;
      font-size: 14px;
    }
  
    .column {
      text-align: left;
      background-color: #ffffff;
      font-size: 14px;
    }
  
    .column-top {
      font-size: 24px;
      line-height: 24px;
    }
  
    .content {
      width: 100%;
    }
  
    .column-bottom {
      font-size: 8px;
      line-height: 8px;
    }
  
    .content h1 {
      margin-top: 0;
      margin-bottom: 16px;
      color: #212121;
      font-family: Roboto, Helvetica, sans-serif;
      font-weight: 400;
      font-size: 20px;
      line-height: 28px;
    }
  
    .content p {
      margin-top: 0;
      margin-bottom: 16px;
      color: #212121;
      font-family: Roboto, Helvetica, sans-serif;
      font-weight: 400;
      font-size: 16px;
      line-height: 24px;
    }
  
    .content .caption {
      color: #616161;
      font-size: 12px;
      line-height: 20px;
    }
  
    /* Footer */
  
    .signature,
    .subscription {
      vertical-align: bottom;
      width: 300px;
      padding-top: 8px;
      margin-bottom: 16px;
    }
  
    .signature {
      text-align: left;
    }
  
    .subscription {
      text-align: right;
    }
  
    .signature p,
    .subscription p {
      margin-top: 0;
      margin-bottom: 8px;
      color: #616161;
      font-family: Roboto, Helvetica, sans-serif;
      font-weight: 400;
      font-size: 12px;
      line-height: 18px;
    }
  </style>
  </head>
  <body>
  <center class="wrapper">
    <table class="top-panel center" width="602" border="0" cellspacing="0" cellpadding="0">
      <tbody>
        <tr>
          <td class="title" width="300">Alumni Portal</td>
          <td class="subject" width="300"><a class="strong" href="#" target="_blank">www.alumnipotral.com</a></td>
        </tr>
        <tr>
          <td class="border" colspan="2">&nbsp;</td>
        </tr>
      </tbody>
    </table>
  
    <div class="spacer">&nbsp;</div>
  
    <table class="main center" width="602" border="0" cellspacing="0" cellpadding="0">
      <tbody>
        <tr>
          <td class="column">
            <div class="column-top">&nbsp;</div>
            <table class="content" border="0" cellspacing="0" cellpadding="0">
              <tbody>
                <tr>
                  <td class="padded">
                    <h1><strong>Request For University</strong></h1>
                    <p><strong>Detail:</strong> </p>
                    <p>Name:  <strong>' . $name . '</strong></p>
                    <p>Email:  <strong>' . $email . '</strong></p>
                   <p>University Name:  <strong>' . $university . '</strong></p>
                   <p>University address:  <strong>' . $address . '</strong></p>
                     <p>Description:  <strong>' . $description . '</strong></p>
                    <p style="text-align:center;"><a href="http://localhost/portal/project/uni_registration/add.php?name=' . $name . '&email=' . $email . '&university=' . $university . '&address=' . $address . '" class="btn">Verify</a></p>
                    <p style="text-align:center;">
                    </p>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="column-bottom">&nbsp;</div>
          </td>
        </tr>
      </tbody>
    </table>
  
    <div class="spacer">&nbsp;</div>
  
    <table class="footer center" width="602" border="0" cellspacing="0" cellpadding="0">
      <tbody>
        <tr>
          <td class="border" colspan="2">&nbsp;</td>
        </tr>
          
      </tbody>
    </table>
  </center>
  </body>';
    $mail->AltBody = ' This is the body in plain text for non - HTML mail clients ';

    if ($mail->send()) {
      echo ' Message has been sent ';
    }
  }
   catch (Exception $e) {
      //echo ' Message could not be sent . Mailer Error :', $mail->ErrorInfo;
  }
}

?>
<html>

<head>
  <link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
crossorigin="anonymous">
  <link rel="stylesheet" href="my.css">
  <title>University Registration</title>
  <!-- <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
-->
  <!-- crossorigin="anonymous"> -->
  <!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"> -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- <link href="css/logo-nav.css" rel="stylesheet"> -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="height: 100;">
      <div class="container" style="height: 100px;">
          <!--<img src="img/logo.svg" height="150px" width="150px"/>-->
        <a class="navbar-brand" href="#">

          <p class="display-4"> <i
            style="color:dimgray;font-size:larger;" class="fas
            fa-graduation-cap"></i> <span class="display-4
            font-weight-bold">Al<span style="">um</span>ni</span>
            Portal</p>
        </a>
        <button class="navbar-toggler" type="button"
          data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <nav class="navbar navbar-light">

                  <a href="../index.php"><button class="btn
btn-outline-success my-2 my-sm-0" type="submit">HOME</button></a>

              </nav>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="myform" style="margin-top: 200px;">
    <section id="hire">
      <h1 class="heading">Register Your University</h1>

      <form action="#" method="POST">
        <div class="field name-box">
          <input type="text" id="name" name="name"required=""
placeholder="Who Are You?" />
          <label for="name">Name</label>
          <span class="ss-icon">check</span>
        </div>

        <div class="field email-box">
          <input type="text" id="email" required="" name="email"
placeholder="name@email.com" />
          <label for="email">Email</label>
          <span class="ss-icon">check</span>
        </div>
        <div class="field name-box">
          <input type="text" id="University Name" required=""
name="university"placeholder="What is Your University Name?" />
          <label for="name">University</label>
          <span class="ss-icon">check</span>
        </div>
        <div class="field name-box">
          <input type="text" id="University Address" required=""
name="address"placeholder="What is Your University Address?" />
          <label for="name">Address</label>
          <span class="ss-icon">check</span>
        </div>
        <div class="field msg-box">
          <textarea id="msg" rows="4" required="" name="description"
placeholder="Your message goes here..." style="
        width: 340px;
    "></textarea>
          <label for="msg">Msg</label>
          <span class="ss-icon">check</span>
        </div>
        <br>
        <br>

        <input class="button" style="margin-top: 25px" name="submit"
type="submit" value="Send" />
      </form>
    </section>
  </div>
  <script src="my.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Rudra Consultancy - Contact Form</title>
  <link href="assets/img/favicon.ico" rel="icon">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Pacifico&amp;family=Quicksand&amp;display=swap'><link rel="stylesheet" href="./contact/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container d-flex justify-content-center align-items-center">
	
	<!-- // SVG
					from: https://www.freepik.com/free-vector/new-message-concept-landing-page_5777076.htm 
  -------------------------------------------------------------
  -- Note: need to use inline svg to manipulate its components
  ------------------------------------------------------------>

  <iframe src="office/index.html" height="400" width="400"></iframe>

	<!-- // FORM
  -------------------------------------------------------------
  ------------------------------------------------------------>
	
  <form action="contact.php" method="POST">
    <h1 class="title text-center mb-4">Talk to Us</h1>

    <!-- Name -->
    <div class="form-group position-relative">
        <label for="formName" class="d-block">
            <i class="icon" data-feather="user"></i>
        </label>
        <input type="text" id="formName" name="name" class="form-control form-control-lg thick" placeholder="Name">
    </div>

    <!-- Mobile -->
    <div class="form-group position-relative">
        <label for="mobile" class="d-block">
            <i class="icon" data-feather="smartphone"></i>
        </label>
        <input type="text" id="mobile" name="mobile" class="form-control form-control-lg thick" placeholder="Mobile">
    </div>

    <!-- E-mail -->
    <div class="form-group position-relative">
        <label for="formEmail" class="d-block">
            <i class="icon" data-feather="mail"></i>
        </label>
        <input type="email" id="formEmail" name="email" class="form-control form-control-lg thick" placeholder="E-mail">
    </div>

    <!-- Message -->
    <div class="form-group message">
        <textarea id="formMessage" name="message" class="form-control form-control-lg" rows="7" placeholder="Message"></textarea>
    </div>

    <!-- Submit btn -->
    <div class="text-center">
        <button type="submit" name="send" class="btn btn-primary" tabIndex="-1">Send message</button>
    </div>
</form>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer\PHPMailer.php';
require 'PHPMailer\SMTP.php';
require 'PHPMailer\Exception.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;                                  // Enable SMTP authentication
        $mail->Username   = 'therohaansingh@gmail.com';          // SMTP username
        $mail->Password   = 'tedo pymo xmos kwcp';               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;                                      // TCP port to connect to

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('therohaansingh@gmail.com', 'Test User');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Submission on RC WEBs';
        $mail->Body = "Sender Name: $name <br> Sender Email: $email <br> Mobile: $mobile <br> Message: $message";

        $mail->send();
        echo '<script>alert("Message sent successfully!");</script>';
    } catch (Exception $e) {
        echo '<script>alert("Message could not be sent. Error: ' . $mail->ErrorInfo . '");</script>';
    }
}
?>
</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script src='https://unpkg.com/feather-icons'></script><script  src="./contact/script.js"></script>

</body>
</html>

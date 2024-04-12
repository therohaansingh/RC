<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gwalior Cambridge School</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="http://gwaliorcambridgeschool.in/" class="navbar-brand">
        <h1 class="m-0 text-primary">
            <!-- <i class="fa fa-book-reader me-3"></i> -->
            Gwalior Cambridge School</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto">
            <a href="http://gwaliorcambridgeschool.in/" class="nav-item nav-link">Home</a>
            <a href="about " class="nav-item nav-link">About Us</a>
            <!-- <a href="classes " class="nav-item nav-link">Classes</a> -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">More</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                    <!-- <a href="facility " class="dropdown-item">School Facilities</a> -->
                    <!-- <a href="team " class="dropdown-item">Popular Teachers</a> -->
                    <a href="call-to-action " class="dropdown-item">Become A Teachers</a>
                    <a href="appointment " class="dropdown-item">Make Appointment</a>
                    <a href="testimonial " class="dropdown-item">Testimonial</a>
                </div>
            </div>
            <a href="contact " class="nav-item nav-link active">Contact Us</a>
        </div>
        <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
        <!-- Navbar End -->


        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Contact Us</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <!-- Contact Form Code -->
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h2 class="mb-4">Contact form</h2>
                                <p class="mb-4">Please enter your inquiries.</p>
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" name="name" class="form-control border-0" id="name" placeholder="Your Name" required>
                                                <label for="name">Your Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="email" name="email" class="form-control border-0" id="email" placeholder="Your Email" required>
                                                <label for="email">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" name="subject" class="form-control border-0" id="subject" placeholder="Subject" required>
                                                <label for="subject">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="number" name="mobile" class="form-control border-0" id="mobile" placeholder="Mobile" required>
                                                <label for="mobile">Mobile</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control border-0" name="message" placeholder="Leave a message here" id="message" style="height: 100px" required></textarea>
                                                <label for="message">Message</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" name="send" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </form>

                                <?php




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile']; // Added mobile field
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;                                  //Enable SMTP authentication
    $mail->Username   = 'gwaliorcambridgeschool@gmail.com';                     //SMTP username
    $mail->Password   = 'ojnklhjcqzljlxkx';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;                                   //TCP port to connect to

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('gwaliorcambridgeschool@gmail.com', 'Test User');

    //Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = "Sender Name: $name <br> Sender Email: $email <br> Mobile: $mobile <br> Message: $message";

    $mail->send();
    echo '<script>alert("Message sent successfully!");</script>';
} catch (Exception $e) {
    echo '<script>alert("Message could not be sent. Error: ' . $mail->ErrorInfo . '");</script>';
}
}
?>

                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57246.63392228578!2d78.17200964413163!3d26.26443429308999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976c0d78658177f%3A0xc04baf14b05d67!2s2%2C%20Airport%20Rd%2C%20near%20Deen%20Dayal%20Nagar%2C%20D.D.%20Nagar%2C%20Radha%20Krishna%20Nagar%2C%20Pandit%20Deendayal%20Nagar%2C%20Gwalior%2C%20Madhya%20Pradesh%20474020!5e0!3m2!1sen!2sin!4v1711307844540!5m2!1sen!2sin"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" style="padding-left: 30px; padding-right: 30px;">
    <div class="container py-5" style="padding-left: 15px; padding-right: 15px;">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h3 class="text-white mb-4">Get In Touch</h3>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Deen Dayal Nagar, Gwalior (M.P.)</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91-992-660-4010</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>gwaliorcambridgeschool@gmail.com</p>
                <div class="d-flex pt-2">
                    <!-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a> -->
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/GwaliorCambridgeSchool"><i class="fab fa-facebook-f"></i></a>
                    <!-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a> -->
                    <!-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a> -->
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/gwaliorcambridgeschool/"><i class="fab fa-instagram"></i></a>

                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Quick Links</h3>
                <a class="btn btn-link text-white-50" href="about ">About Us</a>
                <a class="btn btn-link text-white-50" href="contact ">Contact Us</a>
                <a class="btn btn-link text-white-50" href="404 ">Our Services</a>
                <a class="btn btn-link text-white-50" href="404 ">Privacy Policy</a>
                <a class="btn btn-link text-white-50" href="404 ">Terms & Condition</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h3 class="text-white mb-4">Photo Gallery</h3>
                <div class="row g-2 pt-2">
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/classes-1.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/classes-2.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/classes-3.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/classes-4.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/classes-5.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/classes-6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Rudra Consultancy</a>, All Right Reserved. 
                    
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="">Rohan Singh</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
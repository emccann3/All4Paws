<?php 
if (isset($_POST['submit'])) {
    $to = 'melissa.j.ricahrds@btinternet.com';
    $subject = 'Contact form from website';
    $message = 'Name: ' . $_POST['fname'] . "\r\n\r\n";
    $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
    $message .= 'Message: ' . $_POST['message']; 
    $headers = "From: webmaster@example.com\r\n";
    $headers .= 'Content-Type: text/plain; charset=utf-8';
    $success = mail($to, $subject, $message, $headers);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>thank-you</title>
    </head>
<body>
     <div class="head">
    <img src="https://drive.google.com/uc?id=1qj2BThFslKUdXNl2U8NJmrejxv5O42jU" alt="logo" style="width: 10%" class="rotate90" id="logo1">
    <img src="https://drive.google.com/uc?id=1KumH1Y4oJ_da7GoJt2IIoNhGUSJXAUy_" alt="logo" style="width: 10%" id="logo2">
    <h1 class="header1">All 4 Paws</h1>
    </div>
        <div class="nav">
        <ul class="nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="booking.html">Make a booking</a></li>
            <li><a href="prices.html">Price List</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact-us.html">Contact Us</a></li>
        </ul>
        </div>
    <?php if (isset($success) && $success) { ?>
    <h2 class="header2">Thank You!</h2>
    <p class="message">Your message has been sent</p>
    <p>We aim to reply within 24 hours</p>
    <?php } else { ?>
    <h2 class="header2">Oops!</h2>
    <p class="message">Sorry, there was a problem sending your message.</p>
    <?php } ?>
    <footer id="footer">
        <div id="social">
        <a href="https://www.facebook.com/Petservice01/" target="_blank" class="fa fa-facebook"></a>
        <a href="https://www.instagram.com/all4paws01/?hl=en" target="_blank" class="fa fa-instagram"></a>
        </div>
        <div id="footer-below">All 4 Paws &copy;</div>   
    </footer>
</body>
</html>
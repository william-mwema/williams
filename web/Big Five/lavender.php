<?php
include("connection.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LAVENDER HOTEL</title>

<link rel="stylesheet" href="lavender.css">

</head>
<body>

<!------------------- GET IN TOUCH ----------------------->

<section class="inform">
<div class="contact-us">

<div class="title">
<h2>Get In Touch</h2>
</div>


<div class="contact-box">

<!-- form -->
<div class="contact form">
<h3>Send a message</h3>
<form action="connection.php" method="post">
<div class="formBox">

<div class="row50">
<div class="inputBox">
<span>First Name</span>
<input type="text" name="fname" placeholder="Titus">
</div>

<div class="inputBox">
<span>Last Name</span>
<input type="text" name="lname" placeholder="Nzomo">
</div>
</div>

<div class="row50">
<div class="inputBox">
<span>Email Address</span>
<input type="email" name="email" placeholder="mctitus254@gmail.com">
</div>

<div class="inputBox">
<span>Phone Number</span>
<input type="text" name="phone" placeholder="0768949273">
</div>
</div>

<div class="row100">
<div class="inputBox">
<span>Message</span>
<textarea name="message" placeholder="Write your message here..."></textarea>
</div>
</div>

<div class="row100">
<div class="inputBox">
<input type="submit" value="Send" name="submit">
</div>
</div>

</div>
</form>
</div>

<!-- info box -->
<div class="contact info">
<h3>Contact info</h3>
<div class="infoBox">
<div>
<span><ion-icon name="location"></ion-icon>
</span>
<p>Pwani University. PL3 Block opp S3 </p>
</div>
<div>
<span><ion-icon name="mail"></ion-icon></span>
<a href="mailto:mctitus254@gmail.com">mctitus254@gmail.com</a>
</div>
<div>
<span><ion-icon name="call"></ion-icon></span>
<a href="tel:+254768949273">+254 768 949 273</a>
</div>
<ul class="sci">
<li><a href=""><ion-icon name="logo-facebook"></ion-icon></a></li>
<li><a href=""><ion-icon name="logo-twitter"></ion-icon></a></li>
<li><a href=""><ion-icon name="logo-instagram"></ion-icon></a></li>
<li><a href=""><ion-icon name="logo-linkedin"></ion-icon></a></li>

</ul>
</div>
</div>

<!-- map -->
<div class="contact map">
<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d509785.67870339536!2d39.58716376651442!3d-3.4229114311303315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sarabuko%20farm!5e0!3m2!1sen!2ske!4v1699453286973!5m2!1sen!2ske" 
style="border:0;" allowfullscreen="" loading="lazy" 
referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>
</div>

</div>

</section>
</body>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>
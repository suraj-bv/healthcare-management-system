<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idea's Healthcare</title>
    <link rel="icon" href="img/i (1).png" type="image/png">
    <link rel="stylesheet" href="homestyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <img src="img/i (1).png" alt="Logo" class="logo">
                <h1>Idea's Healthcare</h1>
            </div>
            <div class="user-info">
                <button id="profile-btn"><i class="fa-regular fa-user fa-2x"></i></button>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <section id="home">
                <h2>Welcome to Our Idea's Healthcare</h2>
                <p>Your health is our priority. We provide the best healthcare services for you and your family.</p>
            </section>
            <section id="cards">
                <div class="card">
                    <h3>Book an Appointment</h3>
                    <i class="fa-regular fa-calendar-check fa-2x"></i>
                    <p>Schedule your appointments with our specialists easily.</p>
                    <button onclick="window.location.href='book-appointment.html';">Book now</button>
                </div>
                <div class="card">
                    <h3>Book Tests</h3>
                    <i class="fa-solid fa-flask-vial fa-2x"></i>
                    <p>Book your medical tests online without any hassle.</p>
                    <button>Book now</button>
                </div>
                <div class="card">
                    <h3>My Health Record</h3>
                    <i class="fa-solid fa-book-medical fa-2x"></i>
                    <p>Access and manage your health records securely.</p>
                    <button>View Records</button>
                </div>
                <div class="card">
                    <h3>My Bookings</h3>
                    <i class="fa-regular fa-bookmark fa-2x"></i>
                    <p>View and manage all your bookings in one place.</p>
                    <button onclick="window.location.href='my-appointments.html';">Book now</button>
                </div>
                <div class="card">
                    <h3>Bills and Payments</h3>
                    <i class="fa-solid fa-credit-card fa-2x"></i>
                    <p>View and pay your medical bills online.</p>
                    <button>View Bills</button>
                </div>
            </section>
            <section id="feedback">
                <h2 style="text-align: center;">Feedbacks</h2>
                <div class="feedback-slider">
                    <div class="feedback-container">
                        <div class="feedback-slide active">
                            <p>"The care my family received at Idea's Healthcare was exceptional. The staff was incredibly professional and attentive. We felt well cared for every step of the way."</p>
                            <p><strong>- Jane Doe</strong></p>
                        </div>
                        <div class="feedback-slide">
                            <p>"I appreciate the convenience of scheduling appointments online. It made managing our family’s healthcare so much easier."</p>
                            <p><strong>- John Smith</strong></p>
                        </div>
                        <div class="feedback-slide">
                            <p>"The medical testing services are top-notch. Results were delivered quickly, and the process was smooth and hassle-free."</p>
                            <p><strong>- Emily Johnson</strong></p>
                        </div>
                        <div class="feedback-slide">
                            <p>"The team at Idea's Healthcare went above and beyond to ensure that my treatment plan was effective. I highly recommend their services."</p>
                            <p><strong>- Michael Brown</strong></p>
                        </div>
                        <div class="feedback-slide">
                            <p>"Their approach to patient care is truly holistic. They consider every aspect of health and well-being, making sure nothing is overlooked."</p>
                            <p><strong>- Sarah Williams</strong></p>
                        </div>
                    </div>
                    <button id="prev-btn" class="slider-btn"><i class="fa-solid fa-caret-left"></i></button>
                    <button id="next-btn" class="slider-btn"><i class="fa-solid fa-caret-right"></i></button>
                </div>
            </section>            
        </div>
    </main>
    <div id="profile-panel" class="profile-panel">
        <div class="profile-content">
            <button id="close-btn" class="close-btn"><i class="fas fa-times"></i></button>
            <h3 id="panel-title">Hello, <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       </h3>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="my-appointments.html">My Appointments</a></li>
                    <li><a href="doctors.html">Doctors</a></li>
                    <li><a href="#contact-btn" id="contact-btn">Contact Us</a></li>
                    <li><a href="about.html">About</a></li>
                </ul>
            </nav>
            <div id="contact-details" class="hidden contact-details">
                <div class="contact-item">
                    <i class="fa-solid fa-phone fa-1x"></i>
                    <p>+1 234 567 890</p>
                </div>
                <div class="contact-item">
                    <i class="fa-solid fa-envelope fa-1x"></i>
                    <p>contact@idealshealthcare.com</p>
                </div>
            </div>
            <button id="logout-btn" onclick="window.location.href='logout.php';">Logout</button>
        </div>
    </div>
    <script src="homescript.js"></script>
</body>
</html>

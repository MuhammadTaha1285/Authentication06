<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Authentication System</title>

<link rel="stylesheet" href="style.css?v=2">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>
<body>

<!--================ NAVBAR ================-->

<header>
    <nav class="navbar">

        <div class="logo">
            Authentication <span>System</span>
        </div>

      <ul class="nav-links">

    <li><a href="index.php">Home</a></li>

    <?php if(isset($_SESSION['user_id'])){ ?>

        <li><a href="profile.php">Profile</a></li>

        <li class="welcome">
            Welcome, <strong><?php echo htmlspecialchars($_SESSION['fullname']); ?></strong>
        </li>

        <li><a href="logout.php">Logout</a></li>

    <?php } else { ?>

        <li><a href="login.php">Login</a></li>

        <li><a href="register.php">Register</a></li>

    <?php } ?>

</ul>

    </nav>
</header>

<!--================ HERO ================-->

<section class="hero">

    <div class="hero-left">

        <h1>
            WELCOME TO MY
            <span>PHP WEBSITE</span>
        </h1>

        <p>
            This modern authentication website demonstrates a clean frontend
            design with responsive layout, smooth animations, hover effects,
            beautiful cards and professional UI.
        </p>

        <div class="buttons">

            <?php if(isset($_SESSION['user_id'])){ ?>

                <a href="profile.php" class="btn">Profile</a>
                <a href="logout.php" class="btn2">Logout</a>

            <?php } else { ?>

                <a href="login.php" class="btn">Login</a>
                <a href="register.php" class="btn2">Register</a>

            <?php } ?>

        </div>

    </div>

    <div class="hero-right">

        <div class="glass">

            <i class="fa-solid fa-user-lock"></i>

            <h2>Authentication System</h2>

            <p>
                Login Authentication <br>
                PHP Sessions <br>
                Protected Pages <br>
                Logout System
            </p>

        </div>

    </div>

</section>

<!--================ FEATURES ================-->

<section class="features">

<h2 class="title">
What You Will Learn
</h2>

<div class="cards">

<div class="card">

<i class="fa-solid fa-lock"></i>

<h3>Login</h3>

<p>

Secure Login Page Design

</p>

</div>

<div class="card">

<i class="fa-solid fa-user"></i>

<h3>Profile</h3>

<p>

Responsive Profile UI

</p>

</div>

<div class="card">

<i class="fa-solid fa-shield"></i>

<h3>Security</h3>

<p>

Protected Pages Layout

</p>

</div>

<div class="card">

<i class="fa-solid fa-right-from-bracket"></i>

<h3>Logout</h3>

<p>

Professional Logout Button

</p>

</div>

</div>

</section>

<!--================ ABOUT ================-->

<section class="about">

<div class="about-box">

<h2>

Why Choose This Design?

</h2>

<p>

✔ Responsive Layout

</p>

<p>

✔ Smooth Hover Animation

</p>

<p>

✔ Beautiful Cards

</p>

<p>

✔ Modern Navigation

</p>

<p>

✔ Professional Landing Page

</p>

<p>

✔ Animated Buttons

</p>

<p>

✔ Clean User Interface

</p>

</div>

</section>

<!--================ FOOTER ================-->

<footer>

<h3>

Authentication System

</h3>

<p>

Designed by Muhammad Taha

</p>

</footer>

<script src="./script.js"></script>


</body>
</html>
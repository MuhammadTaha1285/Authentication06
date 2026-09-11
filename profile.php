<?php
include("auth.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Profile</title>

<link rel="stylesheet" href="style.css">

</head>
<body>

<header>

<nav class="navbar">

<div class="logo">

Authentication <span>System</span>

</div>

<ul class="nav-links">

<li><a href="index.php">Home</a></li>

<li><a href="profile.php" class="active">Profile</a></li>

<li><a href="logout.php">Logout</a></li>

</ul>

</nav>

</header>

<section class="hero">

<div class="glass">

<h1>Welcome</h1>

<h2>

<?php echo $_SESSION['fullname']; ?>

</h2>

<br>

<p>

<strong>Email :</strong>

<?php echo $_SESSION['email']; ?>

</p>

<br>

<a href="logout.php" class="btn">

Logout

</a>

</div>

</section>

</body>
</html>
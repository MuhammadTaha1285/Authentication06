<?php
include("config.php");

$message = "";

if(isset($_POST['register'])){

    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if($password != $confirm){

        $message = "Passwords do not match.";

    }else{

        $check = mysqli_query($conn,"SELECT * FROM user WHERE email='$email'");

        if(mysqli_num_rows($check) > 0){

            $message = "Email already exists.";

        }else{

            $hash = password_hash($password, PASSWORD_DEFAULT);

            mysqli_query($conn,"INSERT INTO user(fullname,email,password)
            VALUES('$fullname','$email','$hash')");

            header("Location: login.php");
            exit();

        }

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Register</title>

<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="form-container">

    <form method="POST">

        <h2>Create Account</h2>

        <?php
        if($message!=""){
            echo "<p style='color:red;'>$message</p>";
        }
        ?>

        <input type="text"
        name="fullname"
        placeholder="Full Name"
        required>

        <input type="email"
        name="email"
        placeholder="Email"
        required>

        <input type="password"
        name="password"
        placeholder="Password"
        required>

        <input type="password"
        name="confirm"
        placeholder="Confirm Password"
        required>

        <button type="submit"
        name="register">
        Register
        </button>

        <p>

        Already have an account?

        <a href="login.php">

        Login

        </a>

        </p>

    </form>

</div>

</body>
</html>
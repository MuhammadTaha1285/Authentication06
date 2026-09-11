<?php
include("config.php");

$message = "";

if(isset($_POST['login'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $sql = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");

    if(mysqli_num_rows($sql) > 0){

        $row = mysqli_fetch_assoc($sql);

        if(password_verify($password, $row['password'])){

            $_SESSION['user_id'] = $row['id'];
            $_SESSION['fullname'] = $row['fullname'];
            $_SESSION['email'] = $row['email'];

            header("Location: index.php");
exit();

        }else{

            $message = "Incorrect Password!";

        }

    }else{

        $message = "Email Not Found!";

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="form-container">

<form method="POST">

<h2>Login</h2>

<?php
if($message!=""){
    echo "<p style='color:red;text-align:center;'>$message</p>";
}
?>

<input
type="email"
name="email"
placeholder="Enter Email"
required>

<input
type="password"
name="password"
placeholder="Enter Password"
required>

<button
type="submit"
name="login">
Login
</button>

<p>

Don't have an account?

<a href="register.php">

Register

</a>

</p>

</form>

</div>

</body>
</html>
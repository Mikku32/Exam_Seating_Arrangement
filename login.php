<?php
session_start();

// Change these with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_type = $_POST['user-type'];

    // Fetch user from database
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password' AND usertype='$user_type'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $_SESSION['username'] = $username;

        // Redirect based on user type
        if ($user_type == 'student') {
            header("Location: home.php");
        } elseif ($user_type == 'staff') {
            header("Location: staffPage.php");
        }
    } else {
        echo "<script>alert('Invalid username or password.')</script>";
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="wrapper">
        <header>
            <h5>Log in to your account</h5>      
        </header>
        <form id="frm" action="" method="POST">
            <div class="field username">
                <div class="input-area">
                    <input type="text" name="username" placeholder="Username">
                    <i class="icon fas fa-user"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Username can't be blank</div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="password" name="password" placeholder="Password">
                    <i class="icon fas fa-lock"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Password can't be blank</div>
            </div>

            

            <div class="pass-txt"><a href="#">Forgot password?</a></div>

            <div class="field usertype">
                <label for="student">
                    <input type="radio" id="student" name="user-type" value="student" required> Student
                </label>
                <label for="staff">
                    <input type="radio" id="staff" name="user-type" value="staff" required> Staff
                </label>
            </div>

            <input type="submit" value="Login" >
        </form>

    </div>

        
</body>

</html>

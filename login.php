<?php
// File: login.php
session_start();
include 'includes/db_connect.php';

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        header("Location: career_decision.php");
        exit();
    } else {
        $msg = "Invalid Email or Password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;

            /* 🔥 Background Image */
            background-image: url("photo2.jpg"); /* same image as register */
            background-size: cover;
            background-position: center;
        }

        /* 🔹 Blur Glass Box */
        .box {
            width: 330px;
            padding: 30px;
            border-radius: 15px;
            text-align: center;

            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);

            box-shadow: 0 15px 35px rgba(0,0,0,0.3);
        }

        h2 {
            color: #fff;
            margin-bottom: 20px;
        }

        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 8px;
            border: none;
            outline: none;
        }

        button {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: none;
            background: #28a745;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .error {
            color: #ffdddd;
            font-size: 14px;
        }

        a {
            color: #fff;
            text-decoration: none;
            display: block;
            margin-top: 15px;
            font-size: 14px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="box">
    <h2>Login</h2>

    <?php if($msg) echo "<p class='error'>$msg</p>"; ?>

    <form method="post">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <a href="register.php">Create New Account</a>
</div>

</body>
</html>

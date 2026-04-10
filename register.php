<?php
include 'includes/db_connect.php';

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $check = "SELECT * FROM users WHERE email='$email'";
    $res = mysqli_query($conn, $check);

    if (mysqli_num_rows($res) > 0) {
        $msg = "Email already registered. Please Login.";
    } else {
        $sql = "INSERT INTO users (username,email,password)
                VALUES ('$username','$email','$password')";
        if (mysqli_query($conn, $sql)) {
            header("Location: login.php");
            exit();
        } else {
            $msg = "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;

            background-image: url("photo2.jpg"); /* background image */
            background-size: cover;
            background-position: center;
        }

        /* 🔹 Blur Glass Box (No Move) */
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
            background: #007bff;
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
        }
        /* 📱 Mobile Responsive */
@media (max-width: 768px) {

    .box, .container {
        width: 90% !important;
        padding: 25px !important;
    }

    h2 {
        font-size: 22px !important;
    }

    p {
        font-size: 14px !important;
    }

    button, select, .btn {
        font-size: 14px !important;
        padding: 10px !important;
    }
}

@media (max-width: 480px) {

    .box, .container {
        width: 95% !important;
        padding: 20px !important;
    }

    h2 {
        font-size: 20px !important;
    }

    button, select, .btn {
        font-size: 13px !important;
        padding: 9px !important;
    }
}
    </style>
</head>
<body>

<div class="box">
    <h2>Register</h2>

    <?php if($msg) echo "<p class='error'>$msg</p>"; ?>

    <form method="post">
        <input type="text" name="username" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Create Account</button>
    </form>

    <a href="login.php">Already have an account? Login</a>
</div>

</body>
</html>

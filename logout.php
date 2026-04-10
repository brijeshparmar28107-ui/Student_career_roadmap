<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logged Out</title>
    <style>
        /* Reset and full-screen setup */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            position: relative;
            overflow: hidden;
        }

        /* Background image with dark overlay */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('photo2.jpg') no-repeat center center/cover;
            filter: brightness(0.5); /* Darkens image for better text visibility */
            z-index: -1;
        }

        .logout-box {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 50px 40px;
            border-radius: 20px;
            text-align: center;
            max-width: 400px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.5);
            animation: fadeIn 1s ease-out;
        }

        .logout-box h1 {
            font-size: 42px;
            color: #ffffff;
            margin: 0;
            animation: bounce 1.5s infinite;
        }

        .logout-box p {
            font-size: 20px;
            color: #ffffff;
            margin-top: 15px;
        }

        .btn {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 25px;
            border-radius: 10px;
            background-color: #00ffcc;
            color: #000;
            font-weight: bold;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #00ddaa;
        }

        /* Animations */
        @keyframes fadeIn {
            0% { opacity: 0; transform: scale(0.8);}
            100% { opacity: 1; transform: scale(1);}
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
    </style>
</head>
<body>
    <div class="logout-box">
        <h1>👋 Logged Out!</h1>
        <p>You have successfully logged out.</p>
        <a href="welcome.php" class="btn">Welcome Again </a>
    </div>
    
</body>
</html>

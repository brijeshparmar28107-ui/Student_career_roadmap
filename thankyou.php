<?php  
$name = $_GET['name'] ?? "Guest"; 
$edu  = $_GET['edu'] ?? ""; 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>
    <meta charset="UTF-8">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;

            /* 🔹 BACKGROUND IMAGE */
            background: url('photo2.jpg') no-repeat center center/cover;
            background-attachment: fixed;

            overflow: hidden;
        }

        /* Glass card */
        .thank-box {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);

            padding: 50px 40px;
            border-radius: 20px;
            text-align: center;
            max-width: 420px;

            box-shadow: 0 15px 30px rgba(0,0,0,0.5);
            animation: fadeIn 1s ease-out;
        }

        .thank-box h1 {
            font-size: 40px;
            color: #ffdd57;
            margin: 0;
        }

        .thank-box p {
            font-size: 18px;
            color: #ffffff;
            margin-top: 15px;
        }

        .emoji {
            font-size: 50px;
            margin-top: 15px;
            animation: bounce 1.5s infinite;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-12px); }
        }

        .btn {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 28px;
            border-radius: 10px;
            background-color: #00ffcc;
            color: #000;
            font-weight: bold;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #00ddaa;
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="thank-box">
        <h1>Thank You <?php echo htmlspecialchars($name); ?>!</h1>
        <div class="emoji">🎓✨</div>
        <p>
            We appreciate your interest in  
            <b><?php echo htmlspecialchars($edu); ?></b>.  
            Your learning journey is just beginning!
        </p>

        <a href="logout.php" class="btn">Logout</a>
    </div>
</body>
</html>
 
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Arial, sans-serif;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;

    /* ✅ SAME LIGHT BACKGROUND AS WELCOME */
    background: linear-gradient(rgba(0,0,0,0.08), rgba(0,0,0,0.08)),
                url("photo2.jpg") no-repeat center/cover;
}

.container {
    text-align: center;
    padding: 40px;
    border-radius: 15px;

    background: rgba(255,255,255,0.2);
    backdrop-filter: blur(10px);

    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}

h1 {
    color: #fff;
    margin-bottom: 10px;
}

p {
    color: #eee;
    margin-bottom: 20px;
}

.btn {
    display: inline-block;
    padding: 12px 25px;
    margin: 10px;
    border-radius: 8px;
    text-decoration: none;
    color: #fff;
    font-size: 16px;

    background: #007bff;
    transition: 0.3s;
}

.btn:hover {
    background: #0056b3;
    transform: scale(1.05);
}

.register { background: #28a745; }
.continue { background: #17a2b8; }

@media(max-width:480px){
    .container {
        width: 90%;
        padding: 25px;
    }

    h1 {
        font-size: 22px;
    }
}
</style>

</head>

<body>

<div class="container">

    <h1>👤 Dashboard</h1>

    <?php if(isset($_SESSION['user_id'])): ?>
        <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> 👋</p>

        <a href="career_decision.php" class="btn continue">
            🚀 Continue
        </a>

        <a href="logout.php" class="btn">
            🔓 Logout
        </a>

    <?php else: ?>

        <p>Please login or register to continue</p>

        <a href="login.php" class="btn">
            🔑 Login
        </a>

        <a href="register.php" class="btn register">
            📝 Register
        </a>

    <?php endif; ?>

</div>

</body>
</html>
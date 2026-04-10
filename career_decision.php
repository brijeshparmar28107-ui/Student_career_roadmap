<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Career Decision</title>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: url("photo2.jpg") no-repeat center/cover;
}

.container {
    width: 420px;
    padding: 40px;
    border-radius: 18px;
    text-align: center;
    background: rgba(255,255,255,0.25);
    backdrop-filter: blur(12px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.3);
}

h2 {
    color: #fff;
    margin-bottom: 10px;
}

.btn {
    display: block;
    width: 90%;
    margin: 12px auto;
    padding: 14px;
    text-decoration: none;
    color: #fff;
    border-radius: 8px;
    font-size: 16px;
    transition: 0.3s;
}

.btn:hover {
    transform: scale(1.05);
    opacity: 0.9;
}

/* Buttons Colors */
.btn-roadmap { background: #28a745; }
.btn-ai { background: #007bff; }
.btn-resource { background: #fd7e14; }
.btn-goal { background: #6f42c1; }

.logout {
    display: inline-block;
    margin-top: 15px;
    color: #ffdddd;
    text-decoration: none;
}

/* 📱 Mobile Responsive */
@media (max-width: 768px) {
    .container { width: 90%; padding: 25px; }
    h2 { font-size: 22px; }
    .btn { font-size: 14px; padding: 10px; }
}

@media (max-width: 480px) {
    .container { width: 95%; padding: 20px; }
    h2 { font-size: 20px; }
    .btn { font-size: 13px; padding: 9px; }
}
</style>

</head>
<body>

<div class="container">

    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> 👋</h2>

    <!-- 🚀 Features -->
    <a href="roadmap.php" class="btn btn-roadmap">
        🚀 Career Roadmap
    </a>

    <a href="ai_suggestion.php" class="btn btn-ai">
        🤖 AI Suggestion
    </a>

    <a href="resources.php" class="btn btn-resource">
        📚 Learning Resources
    </a>

    <a href="goal.php" class="btn btn-goal">
        🎯 Set Goal
    </a>

    <a href="login.php" class="logout">Logout</a>

</div>

</body>
</html>
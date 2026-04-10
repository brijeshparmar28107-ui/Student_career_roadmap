<?php
session_start();

if (!isset($_SESSION['score'])) {
    header("Location: career_decision.php");
    exit();
}

$score = $_SESSION['score'];
$total = $_SESSION['total'];

if ($score >= 8) {
    $result = "Science Field (Engineering / Medical)";
} elseif ($score >= 5) {
    $result = "Commerce Field (Business / CA)";
} else {
    $result = "Arts Field (Design / Government Jobs)";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Result</title>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;

    background-image: url("photo2.jpg");
    background-size: cover;
}

.container {
    width: 400px;
    padding: 30px;
    border-radius: 15px;
    text-align: center;

    background: rgba(255,255,255,0.25);
    backdrop-filter: blur(12px);

    box-shadow: 0 15px 35px rgba(0,0,0,0.3);
}

h2 {
    color: #fff;
}

.result {
    color: #fff;
    margin-top: 15px;
    font-size: 18px;
}

.btn {
    display: block;
    margin-top: 20px;
    padding: 12px;
    background: #28a745;
    color: #fff;
    text-decoration: none;
    border-radius: 8px;
}
</style>
</head>

<body>

<div class="container">
    <h2>Your Result</h2>

    <div class="result">Score: <?php echo "$score / $total"; ?></div>
    <div class="result">Recommended Career: <?php echo $result; ?></div>

    <a href="career_decision.php" class="btn">Back to Home</a>
</div>

</body>
</html>
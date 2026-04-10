<?php
session_start();

// 🔒 Login check (optional but recommended)
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$error = "";

// Form submit check
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST['education'])) {

        $education = $_POST['education'];

        switch ($education) {
            case "10th":
                header("Location: test_10th.php");
                break;

            case "12_pcm":
                header("Location: test_pcm.php");
                break;

            case "12_pcb":
                header("Location: test_pcb.php");
                break;

            case "12_com":
                header("Location: test_commerce.php");
                break;

            case "12_arts":
                header("Location: test_arts.php");
                break;

            case "diploma":
                header("Location: test_diploma.php");
                break;

            default:
                $error = "⚠ Please select a valid option.";
        }

        exit();
    } else {
        $error = "⚠ Please select your education level.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Career Test - Education</title>

<style>
* {
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Segoe UI', Arial, sans-serif;
}

body {
    height: 100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background: url('photo2.jpg') no-repeat center center/cover;
}

/* 🔥 Glass effect */
.box {
    background: rgba(255,255,255,0.25);
    backdrop-filter: blur(12px);
    padding: 40px;
    border-radius: 18px;
    width: 370px;
    text-align:center;
    box-shadow: 0 15px 35px rgba(0,0,0,0.3);
    color: #fff;
}

.box h2 {
    margin-bottom: 20px;
}

select, button {
    width: 100%;
    padding: 12px;
    margin-top: 15px;
    border-radius: 8px;
    border: none;
    font-size: 16px;
}

select {
    background: rgba(255,255,255,0.9);
    color: #333;
}

button {
    background: #28a745;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: #218838;
    transform: scale(1.05);
}

.error {
    margin-top: 15px;
    color: #ffdddd;
    font-weight: bold;
}

/* Back button */
.back {
    display:block;
    margin-top: 15px;
    color: #ffdddd;
    text-decoration:none;
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
    <h2>🎯 Select Your Education</h2>

    <form method="post">
        <select name="education" required>
            <option value="">-- Select --</option>
            <option value="10th">10th Completed</option>
            <option value="12_pcm">12th Science PCM</option>
            <option value="12_pcb">12th Science PCB</option>
            <option value="12_com">12th Commerce</option>
            <option value="12_arts">12th Arts</option>
            <option value="diploma">Diploma Completed</option>
        </select>

        <button type="submit">Next ➡</button>
    </form>

    <?php if ($error != ""): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>

    <a href="career_decision.php" class="back">⬅ Back</a>
</div>

</body>
</html>
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $interest = $_POST['interest'];
    $skill = $_POST['skill'];

    if ($interest == "coding" && $skill == "logic") {
        $result = "💻 Software Developer, Web Developer, App Developer";
    } 
    elseif ($interest == "design" && $skill == "creative") {
        $result = "🎨 Graphic Designer, UI/UX Designer, Animator";
    } 
    elseif ($interest == "business" && $skill == "management") {
        $result = "📈 Business Analyst, Entrepreneur, Manager";
    } 
    elseif ($interest == "maths" && $skill == "analysis") {
        $result = "📊 Data Scientist, Accountant, Analyst";
    } 
    else {
        $result = "🤔 Explore fields like IT, Marketing, or Design based on your interest.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>AI Career Suggestion</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;

    background: linear-gradient(rgba(0,0,0,0.08), rgba(0,0,0,0.08)),
                url("photo2.jpg") center/cover;
}

.box {
    width: 420px;
    padding: 40px;
    border-radius: 18px;
    text-align: center;

    background: rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(12px);

    box-shadow: 0 15px 35px rgba(0,0,0,0.3);
}

h2 {
    color: #fff;
    margin-bottom: 20px;
}

select, button {
    width: 90%;
    padding: 12px;
    margin: 10px 0;
    border-radius: 8px;
    border: none;
}

select {
    background: rgba(255,255,255,0.9);
}

button {
    background: #28a745;
    color: white;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    transform: scale(1.05);
}

.result {
    margin-top: 20px;
    font-size: 18px;
    color: #fff;
    font-weight: bold;
}

/* 🔥 Continue Button */
.thank-btn {
    display: block;
    width: 90%;
    padding: 12px;
    margin: 15px auto;
    text-align: center;
    text-decoration: none;
    border-radius: 8px;
    background: #007bff;
    color: #fff;
    transition: 0.3s;
}

.thank-btn:hover {
    background: #0056b3;
    transform: scale(1.05);
}
</style>
</head>

<body>

<div class="box">
    <h2>🤖 AI Career Suggestion</h2>

    <form method="POST">
        <select name="interest" required>
            <option value="">Select Interest</option>
            <option value="coding">Coding</option>
            <option value="design">Design</option>
            <option value="business">Business</option>
            <option value="maths">Maths</option>
        </select>

        <select name="skill" required>
            <option value="">Select Skill</option>
            <option value="logic">Logical Thinking</option>
            <option value="creative">Creativity</option>
            <option value="management">Management</option>
            <option value="analysis">Analysis</option>
        </select>

        <button type="submit">Get Suggestion</button>
    </form>

    <?php if ($result != ""): ?>
        <div class="result"><?php echo $result; ?></div>

        <!-- 🔥 Continue Button -->
        <a href="thankyou.php" class="thank-btn">
            Thank You
        </a>
    <?php endif; ?>

</div>

</body>
</html>
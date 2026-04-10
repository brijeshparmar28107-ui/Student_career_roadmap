<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Save Goal
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['goal'])) {
        $_SESSION['goal'] = $_POST['goal'];
    }

    // Clear goal
    if (isset($_POST['clear'])) {
        unset($_SESSION['goal']);
    }
}

$goal = $_SESSION['goal'] ?? "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Learning Resources</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;

    background: linear-gradient(rgba(0,0,0,0.08), rgba(0,0,0,0.08)),
                url("photo2.jpg") center/cover;
}

.container {
    width: 430px;
    padding: 30px;
    border-radius: 15px;
    background: rgba(255,255,255,0.25);
    backdrop-filter: blur(12px);
    color: #fff;
    text-align: center;
}

h2 {
    margin-bottom: 15px;
}

.card {
    background: rgba(255,255,255,0.2);
    padding: 15px;
    margin: 12px 0;
    border-radius: 10px;
    transition: 0.3s;
}

.card:hover {
    transform: scale(1.03);
}

a {
    color: #fff;
    text-decoration: none;
    display: block;
    margin-top: 6px;
}

a:hover {
    text-decoration: underline;
}

/* Goal Section */
input {
    width: 90%;
    padding: 10px;
    margin-top: 10px;
    border-radius: 8px;
    border: none;
}

button {
    margin-top: 10px;
    padding: 10px;
    width: 90%;
    border-radius: 8px;
    border: none;
    background: #28a745;
    color: #fff;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    transform: scale(1.05);
}

.clear-btn {
    background: #dc3545;
}

.goal-box {
    margin-top: 10px;
    padding: 10px;
    background: rgba(0,0,0,0.4);
    border-radius: 8px;
}

/* Continue Button */
.continue-btn {
    display: block;
    width: 90%;
    padding: 12px;
    margin: 15px auto;
    border-radius: 8px;
    background: #007bff;
    color: #fff;
    text-decoration: none;
    transition: 0.3s;
}

.continue-btn:hover {
    background: #0056b3;
}
</style>
</head>

<body>

<div class="container">
<h2>📚 Learning Resources</h2>

<div class="card">
    <h3>💻 Web Development</h3>
    <a href="https://www.w3schools.com" target="_blank">W3Schools - Learn Basics</a>
    <a href="https://developer.mozilla.org" target="_blank">MDN Docs - Official Guide</a>
    <a href="https://www.freecodecamp.org" target="_blank">FreeCodeCamp - Full Courses</a>
</div>

<div class="card">
    <h3>📊 Programming</h3>
    <a href="https://www.geeksforgeeks.org" target="_blank">GeeksforGeeks</a>
    <a href="https://www.programiz.com" target="_blank">Programiz</a>
    <a href="https://leetcode.com" target="_blank">LeetCode - Practice</a>
</div>

<div class="card">
    <h3>🎥 Video Learning</h3>
    <a href="https://www.youtube.com" target="_blank">YouTube Tutorials</a>
    <a href="https://www.udemy.com" target="_blank">Udemy Courses</a>
</div>

<!-- 🎯 Goal Section -->
<h2>🎯 Set Your Learning Goal</h2>

<form method="POST">
    <input type="text" name="goal" placeholder="Enter your goal..." required>
    <button type="submit">Save Goal</button>
</form>

<?php if($goal != ""): ?>
    <div class="goal-box">
        ✅ Your Goal: <?php echo htmlspecialchars($goal); ?>
    </div>

    <form method="POST">
        <button type="submit" name="clear" class="clear-btn">Clear Goal</button>
    </form>
<?php endif; ?>

<!-- Continue -->
<a href="thankyou.php" class="continue-btn">
    Thank You 
</a>

</div>

</body>
</html>
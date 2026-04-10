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
    width: 420px;
    padding: 30px;
    border-radius: 15px;
    background: rgba(255,255,255,0.25);
    backdrop-filter: blur(12px);
    color: #fff;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
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
    font-size: 15px;
}

a:hover {
    text-decoration: underline;
}

/* Button */
.continue-btn {
    display: block;
    width: 90%;
    padding: 12px;
    margin: 20px auto 0;
    text-align: center;
    border-radius: 8px;
    background: #007bff;
    color: #fff;
    text-decoration: none;
    transition: 0.3s;
}

.continue-btn:hover {
    background: #0056b3;
    transform: scale(1.05);
}
</style>
</head>

<body>

<div class="container">
<h2>📚 Learning Resources</h2>

<div class="card">
    <h3>💻 Web Development</h3>
    <a href="https://www.w3schools.com" target="_blank">W3Schools - Learn HTML, CSS, JS</a>
    <a href="https://developer.mozilla.org" target="_blank">MDN Docs - Official Documentation</a>
    <a href="https://www.freecodecamp.org" target="_blank">FreeCodeCamp - Full Courses</a>
</div>

<div class="card">
    <h3>📊 Programming</h3>
    <a href="https://www.geeksforgeeks.org" target="_blank">GeeksforGeeks - Coding Practice</a>
    <a href="https://www.programiz.com" target="_blank">Programiz - Beginner Friendly</a>
    <a href="https://leetcode.com" target="_blank">LeetCode - Interview Preparation</a>
</div>

<div class="card">
    <h3>🎥 Video Learning</h3>
    <a href="https://www.youtube.com" target="_blank">YouTube - Free Tutorials</a>
    <a href="https://www.udemy.com" target="_blank">Udemy - Paid Courses</a>
</div>

<div class="card">
    <h3>📘 Extra Resources</h3>
    <a href="https://github.com" target="_blank">GitHub - Projects & Code</a>
    <a href="https://stackoverflow.com" target="_blank">Stack Overflow - Ask Questions</a>
</div>

<a href="thankyou.php" class="continue-btn">
    Thank You
</a>

</div>

</body>
</html>
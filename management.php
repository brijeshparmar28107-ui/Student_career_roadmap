<?php
session_start();
$name = $_SESSION['username'] ?? ($_GET['name'] ?? "Student");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Management & Business</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="overlay">
<div class="card">

<h2>Welcome, <span class="highlight"><?php echo htmlspecialchars($name); ?></span> 📊</h2>
<p>You selected <span class="highlight">Management & Business</span>.</p>

<h1>Management & Business Stream</h1>

<h3 class="highlight">Popular Courses</h3>
<div class="subject-card">
<ul>
<li>BBA (General / Marketing / HR)</li>
<li>BMS (Bachelor of Management Studies)</li>
<li>BBM (Business Management)</li>
<li>MBA (Marketing / HR / Finance)</li>
<li>Entrepreneurship Programs</li>
</ul>
</div>

<h3 class="highlight">Career Opportunities</h3>
<p>
Business Manager, HR Executive, Marketing Manager,  
Entrepreneur, Sales Manager, Operations Manager.
</p>

<a href="thankyou.php?name=<?php echo urlencode($name); ?>" class="btn">Continue</a>

</div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>
<?php
session_start();
$name = $_SESSION['username'] ?? ($_GET['name'] ?? "Student");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Computer Application</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="overlay">
<div class="card">

<h2>Welcome, <span class="highlight"><?php echo htmlspecialchars($name); ?></span> 💻</h2>
<p>You selected <span class="highlight">Computer Application</span>.</p>

<h1>Computer Application Stream</h1>

<h3 class="highlight">Popular Courses</h3>
<div class="subject-card">
<ul>
<li>BCA (Bachelor of Computer Applications)</li>
<li>B.Sc IT</li>
<li>MCA (Master of Computer Applications)</li>
<li>Cyber Security</li>
<li>Data Science / AI / Web Development</li>
</ul>
</div>

<h3 class="highlight">Career Opportunities</h3>
<p>
Software Developer, Web Developer, Data Analyst,  
Cyber Security Expert, IT Manager, App Developer.
</p>

<a href="thankyou.php?name=<?php echo urlencode($name); ?>" class="btn">Continue</a>

</div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>
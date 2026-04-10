<?php
session_start();
$name = $_SESSION['username'] ?? ($_GET['name'] ?? "Student");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Law & Civil Services</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="overlay">
<div class="card">

<h2>Welcome, <span class="highlight"><?php echo htmlspecialchars($name); ?></span> ⚖️</h2>
<p>You selected <span class="highlight">Law & Civil Services</span>.</p>

<h1>Law & Government Services</h1>

<h3 class="highlight">Popular Courses</h3>
<div class="subject-card">
<ul>
<li>LLB (Bachelor of Law)</li>
<li>BA LLB (Integrated)</li>
<li>Public Administration</li>
<li>Political Science</li>
<li>LLM (Master of Law)</li>
</ul>
</div>

<h3 class="highlight">Career Opportunities</h3>
<p>
Advocate, Judge, Legal Advisor,  
Civil Services (UPSC / GPSC), Government Officer,  
Public Prosecutor.
</p>

<a href="thankyou.php?name=<?php echo urlencode($name); ?>" class="btn">Continue</a>

</div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>
<?php
session_start();
$name = $_SESSION['username'] ?? ($_GET['name'] ?? "Student");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Banking & Insurance</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="overlay">
<div class="card">

<h2>Welcome, <span class="highlight"><?php echo htmlspecialchars($name); ?></span> 🏦</h2>
<p>You selected <span class="highlight">Banking & Insurance</span>.</p>

<h1>Banking & Insurance Stream</h1>

<h3 class="highlight">Popular Courses</h3>
<div class="subject-card">
<ul>
<li>B.Com (Banking & Insurance)</li>
<li>BBA (Banking)</li>
<li>Bachelor of Banking & Finance (BBF)</li>
<li>MBA (Banking & Finance)</li>
<li>Diploma in Insurance</li>
</ul>
</div>

<h3 class="highlight">Career Opportunities</h3>
<p>
Bank Officer, Insurance Advisor, Loan Officer,  
Investment Advisor, Risk Manager, Financial Planner.
</p>

<a href="thankyou.php?name=<?php echo urlencode($name); ?>" class="btn">Continue</a>

</div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>
<?php
session_start();
$name = $_SESSION['username'] ?? ($_GET['name'] ?? "Student");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Accounting & Finance</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="overlay">
<div class="card">

<h2>Welcome, <span class="highlight"><?php echo htmlspecialchars($name); ?></span> 💼</h2>
<p>You selected <span class="highlight">Accounting & Finance</span>.</p>

<h1>Accounting & Finance Stream</h1>

<h3 class="highlight">Popular Courses</h3>
<div class="subject-card">
<ul>
<li>B.Com (Accounting / Finance)</li>
<li>BBA (Finance)</li>
<li>Chartered Accountant (CA)</li>
<li>Company Secretary (CS)</li>
<li>Cost & Management Accounting (CMA)</li>
<li>M.Com / MBA Finance</li>
</ul>
</div>

<h3 class="highlight">Career Opportunities</h3>
<p>
Accountant, Financial Analyst, Tax Consultant, Auditor,  
Investment Banker, Finance Manager, Business Consultant.
</p>

<a href="thankyou.php?name=<?php echo urlencode($name); ?>" class="btn">Continue</a>

</div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>
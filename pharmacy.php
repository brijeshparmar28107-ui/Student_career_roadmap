<?php
session_start();
$name = $_SESSION['username'] ?? ($_GET['name'] ?? "Student");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Pharmacy Courses</title>

<!-- External CSS -->
<link rel="stylesheet" href="style.css">

</head>

<body>
<div class="overlay">
<div class="card">

<h2>
Welcome, 
<span class="highlight">
<?php echo htmlspecialchars($name); ?>
</span> 💊
</h2>

<p>
You selected 
<span class="highlight">Pharmacy Courses</span> 
as your career path.
</p>

<h1>Pharmacy Stream</h1>

<h3 class="highlight">Eligibility</h3>
<p>
12th Science (PCB / PCB + Math) pass from recognized board.  
Some courses may require entrance exams (GUJCET / State Entrance) or merit-based selection.
</p>

<h3 class="highlight">Duration</h3>
<p>
D.Pharm: 2 Years |  
B.Pharm: 4 Years |  
M.Pharm: 2 Years
</p>

<h3 class="highlight">Popular Pharmacy Courses</h3>

<div class="subject-card">
<ul>
<li>D.Pharm (Diploma in Pharmacy)</li>
<li>B.Pharm (Bachelor of Pharmacy)</li>
<li>M.Pharm (Master of Pharmacy)</li>
<li>Pharm.D (Doctor of Pharmacy)</li>
<li>Clinical Research / Pharmaceutical Chemistry</li>
<li>Pharmaceutical Quality Control</li>
<li>Pharmacy Practice / Hospital Pharmacy</li>
</ul>
</div>

<h3 class="highlight">Career Opportunities</h3>
<p>
Pharmacist (Retail / Hospital), Clinical Researcher,  
Pharmaceutical Analyst, Quality Control Officer,  
Production Manager, Regulatory Affairs,  
Higher Studies: M.Pharm / Pharm.D / MBA Pharma.
</p>

<div class="college-section">

<h3 class="highlight">🏛 Government Pharmacy Colleges (Gujarat)</h3>

<ol>
<li>
<div class="college-card">
<a href="https://www.gpahmedabad.ac.in" target="_blank">
Government Pharmacy College, Ahmedabad
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.gprajkot.ac.in" target="_blank">
Government Pharmacy College, Rajkot
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.gpvadodara.ac.in" target="_blank">
Government Pharmacy College, Vadodara
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.gpsurat.ac.in" target="_blank">
Government Pharmacy College, Surat
</a>
</div>
</li>
</ol>

<h3 class="highlight" style="margin-top:20px;">
🏫 Private Pharmacy Colleges (Gujarat)
</h3>

<ol>
<li>
<div class="college-card">
<a href="https://paruluniversity.ac.in" target="_blank">
Parul University – Pharmacy
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.nirmauni.ac.in" target="_blank">
Nirma University – Pharmacy
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://silveroakuni.ac.in" target="_blank">
Silver Oak University – Pharmacy
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.spuvvn.edu" target="_blank">
Sardar Patel University – Pharmacy
</a>
</div>
</li>
</ol>

</div>

<a href="thankyou.php?name=<?php echo urlencode($name); ?>" class="btn">
Continue
</a>

</div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>
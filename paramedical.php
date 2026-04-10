<?php
session_start();
$name = $_SESSION['username'] ?? ($_GET['name'] ?? "Student");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Paramedical Courses</title>

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
</span> 🩺
</h2>

<p>
You selected 
<span class="highlight">Paramedical Courses</span> 
as your career path.
</p>

<h1>Paramedical Stream</h1>

<h3 class="highlight">Eligibility</h3>
<p>
12th Science (PCB) pass from recognized board.  
Some courses may require entrance exams or merit-based selection.
</p>

<h3 class="highlight">Duration</h3>
<p>1 to 3 Years depending on course</p>

<h3 class="highlight">Popular Paramedical Courses</h3>

<div class="subject-card">
<ul>
<li>Diploma / B.Sc in Medical Laboratory Technology (MLT)</li>
<li>Diploma / B.Sc in Radiology / Imaging Technology</li>
<li>Diploma / B.Sc in Physiotherapy</li>
<li>Diploma / B.Sc in Operation Theatre Technology (OTT)</li>
<li>Diploma / B.Sc in Optometry</li>
<li>Diploma / B.Sc in Emergency Medical Technology</li>
<li>Diploma / B.Sc in Anesthesia Technology</li>
<li>Diploma / B.Sc in Perfusion Technology</li>
</ul>
</div>

<h3 class="highlight">Career Opportunities</h3>
<p>
Lab Technician, Radiology Technician, Physiotherapist, OT Technician,  
Optometrist, Paramedical Staff, Emergency Medical Technician,  
Hospital Administration, Further Studies: B.Sc / M.Sc / PG Diploma.
</p>

<div class="college-section">

<h3 class="highlight">🏛 Government Paramedical Colleges (Gujarat)</h3>

<ol>
<li>
<div class="college-card">
<a href="https://www.gpahmedabad.ac.in" target="_blank">
Government Polytechnic, Ahmedabad
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.gprajkot.ac.in" target="_blank">
Government Polytechnic, Rajkot
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.gpvadodara.ac.in" target="_blank">
Government Polytechnic, Vadodara
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.gpsurat.ac.in" target="_blank">
Government Polytechnic, Surat
</a>
</div>
</li>
</ol>

<h3 class="highlight" style="margin-top:20px;">
🏫 Private Paramedical Colleges (Gujarat)
</h3>

<ol>
<li>
<div class="college-card">
<a href="https://paruluniversity.ac.in" target="_blank">
Parul University – Allied Health Sciences
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.nirmauni.ac.in" target="_blank">
Nirma University – Paramedical Courses
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://silveroakuni.ac.in" target="_blank">
Silver Oak University – Health Sciences
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.spuvvn.edu" target="_blank">
Sardar Patel University – Paramedical
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
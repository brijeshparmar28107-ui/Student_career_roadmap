<?php
session_start();
$name = $_SESSION['username'] ?? ($_GET['name'] ?? "Student");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Medical Courses</title>

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
</span> 🏥
</h2>

<p>
You selected 
<span class="highlight">Medical Courses</span> 
as your career path.
</p>

<h1>Medical Stream Courses</h1>

<h3 class="highlight">Eligibility</h3>
<p>
12th Science (PCB) pass from recognized board.  
Admission through <b>NEET / State Entrance Exams</b>.
</p>

<h3 class="highlight">Duration</h3>
<p>
MBBS: 5.5 Years |  
BAMS/BHMS: 5.5 Years |  
BDS: 5 Years |  
Nursing: 3–4 Years |  
Pharmacy: 4 Years
</p>

<h3 class="highlight">Popular Medical Courses</h3>

<div class="subject-card">
<ul>
<li>MBBS (Bachelor of Medicine & Bachelor of Surgery)</li>
<li>BAMS (Ayurvedic Medicine)</li>
<li>BHMS (Homeopathy)</li>
<li>BDS (Dental Surgery)</li>
<li>B.Pharm (Pharmacy)</li>
<li>B.Sc Nursing</li>
<li>Physiotherapy / Paramedical Courses</li>
<li>Medical Lab Technology (MLT)</li>
</ul>
</div>

<h3 class="highlight">Career Opportunities</h3>
<p>
Doctor (Allopathy, Ayurveda, Homeopathy),  
Dentist, Pharmacist, Nurse, Lab Technician, Physiotherapist,  
Healthcare Consultant, Research Scientist,  
Hospital Administration, Higher Studies (MD, MS, M.Pharm, MSc Nursing).
</p>

<div class="college-section">

<h3 class="highlight">🏛 Government Medical Colleges (Gujarat)</h3>

<ol>
<li>
<div class="college-card">
<a href="https://www.bmcgujarat.org" target="_blank">
B.J. Medical College, Ahmedabad
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.cmc.edu" target="_blank">
GMERS Medical College, Gandhinagar
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.nimhans.ac.in" target="_blank">
Civil Hospital / Medical College, Surat
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.ahduni.edu.in" target="_blank">
Government Medical College, Baroda
</a>
</div>
</li>
</ol>

<h3 class="highlight" style="margin-top:20px;">
🏫 Private Medical Colleges (Gujarat)
</h3>

<ol>
<li>
<div class="college-card">
<a href="https://www.paruluniversity.ac.in" target="_blank">
Parul University – Medical & Health Sciences
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.nirmauni.ac.in" target="_blank">
Nirma University – Pharmacy & Medical Labs
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.spuvvn.edu" target="_blank">
Sardar Patel University – Allied Medical Sciences
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://silveroakuni.ac.in" target="_blank">
Silver Oak University – Nursing & Health Sciences
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
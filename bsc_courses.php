<?php
session_start();
$name = $_SESSION['username'] ?? ($_GET['name'] ?? "Student");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>B.Sc Courses</title>

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
</span> 🎓
</h2>

<p>
You selected 
<span class="highlight">B.Sc Courses</span> 
as your career path.
</p>

<h1>Bachelor of Science (B.Sc)</h1>

<h3 class="highlight">Eligibility</h3>
<p>
12th Science / Commerce / Arts Pass with relevant subjects from recognized board.
</p>

<h3 class="highlight">Duration</h3>
<p>3 Years (6 Semesters)</p>

<h3 class="highlight">Popular B.Sc Courses</h3>

<div class="subject-card">
<ul>
<li>B.Sc Physics</li>
<li>B.Sc Chemistry</li>
<li>B.Sc Mathematics</li>
<li>B.Sc Computer Science (CS)</li>
<li>B.Sc Information Technology (IT)</li>
<li>B.Sc Biotechnology</li>
<li>B.Sc Microbiology</li>
<li>B.Sc Environmental Science</li>
</ul>
</div>

<h3 class="highlight">Career Opportunities</h3>
<p>
Research Scientist, Lab Technician, Software Developer, Data Analyst,  
Teaching, Government / Private Sector Jobs, Further Studies (M.Sc / MCA / MBA).
</p>

<div class="college-section">

<h3 class="highlight">🏛 Government Colleges (Gujarat)</h3>

<ol>
<li>
<div class="college-card">
<a href="https://www.gujaratuniversity.ac.in" target="_blank">
Gujarat University, Ahmedabad
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.msubaroda.ac.in" target="_blank">
M.S. University, Baroda
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.gnfc.ac.in" target="_blank">
Gujarat National College, Surat
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.suratmunicipalcolleges.org" target="_blank">
Government Science College, Surat
</a>
</div>
</li>
</ol>

<h3 class="highlight" style="margin-top:20px;">
🏫 Private Colleges (Gujarat)
</h3>

<ol>
<li>
<div class="college-card">
<a href="https://www.paruluniversity.ac.in" target="_blank">
Parul University
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.nirmauni.ac.in" target="_blank">
Nirma University
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.spuvvn.edu" target="_blank">
Sardar Patel University, Vallabh Vidyanagar
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://silveroakuni.ac.in" target="_blank">
Silver Oak University
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
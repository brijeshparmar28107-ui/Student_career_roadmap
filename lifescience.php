<?php 
session_start(); 
$name = $_SESSION['username'] ?? ($_GET['name'] ?? "Student"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Life Science & Research</title>

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
</span> 🔬
</h2>

<p>
You selected 
<span class="highlight">Life Science & Research</span> 
as your career path.
</p>

<h1>Life Science Stream</h1>

<h3 class="highlight">Eligibility</h3>
<p>
12th Science (PCB / PCM / PCMB) pass from recognized board.
Admission mostly merit-based or entrance exam based.
</p>

<h3 class="highlight">Duration</h3>
<p>
B.Sc: 3 Years | M.Sc: 2 Years | PhD: 3–5 Years
</p>

<h3 class="highlight">Popular Courses</h3>

<div class="subject-card">
<ul>
<li>B.Sc Biotechnology</li>
<li>B.Sc Microbiology</li>
<li>B.Sc Biochemistry</li>
<li>B.Sc Genetics</li>
<li>B.Sc Environmental Science</li>
<li>M.Sc Life Sciences</li>
<li>PhD in Biological Sciences</li>
</ul>
</div>

<h3 class="highlight">Career Opportunities</h3>
<p>
Research Scientist, Lab Technician, Microbiologist,
Biotechnologist, Clinical Research Associate,
Environmental Consultant, Higher Studies (M.Sc / PhD).
</p>

<div class="college-section">

<h3 class="highlight">🏛 Government Colleges (Gujarat)</h3>

<ol>
<li>
<div class="college-card">
<a href="https://www.gujaratuniversity.ac.in" target="_blank">
Gujarat University
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.msubaroda.ac.in" target="_blank">
MS University, Vadodara
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.spuvvn.edu" target="_blank">
Sardar Patel University
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.saurashtrauniversity.edu" target="_blank">
Saurashtra University
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
<a href="https://paruluniversity.ac.in" target="_blank">
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
<a href="https://silveroakuni.ac.in" target="_blank">
Silver Oak University
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.marwadiuniversity.ac.in" target="_blank">
Marwadi University
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
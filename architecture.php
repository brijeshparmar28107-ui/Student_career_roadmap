<?php  
session_start();

$name   = $_SESSION['username'] ?? ($_GET['name'] ?? "Student");   
$edu    = "Architecture (B.Arch)";  
$career = $_GET['career'] ?? "Architect & Design";  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $edu; ?> Details</title>

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
</span> 🏛️
</h2>

<p>
You selected 
<span class="highlight"><?php echo $edu; ?></span> 
as your career path.
</p>

<h1><?php echo $edu; ?></h1>

<!-- Eligibility -->
<h3 class="highlight">Eligibility</h3>
<p>
12th Science (PCM) with Mathematics.  
Admission through <b>NATA</b> or <b>JEE Paper-2</b>.
</p>

<!-- Duration -->
<h3 class="highlight">Duration</h3>
<p>5 Years</p>

<!-- Subjects -->
<h3 class="highlight">Popular Subjects</h3>

<div class="subject-card">
<ul>
<li>Architectural Design</li>
<li>Building Construction & Materials</li>
<li>History of Architecture</li>
<li>Structural Systems</li>
<li>Urban Planning & Housing</li>
<li>Landscape Architecture</li>
<li>Computer-Aided Design (AutoCAD, Revit)</li>
</ul>
</div>

<!-- Career -->
<h3 class="highlight">Career Opportunities</h3>
<p>
Architect, Urban Planner, Interior Designer,  
Landscape Architect, Town Planner,  
Construction Consultant, Higher Studies (M.Arch).
</p>

<!-- Colleges Section -->
<div class="college-section">

<h3 class="highlight">🏛 Government Architecture Colleges (Gujarat)</h3>

<ol>
<li>
<div class="college-card">
<a href="https://cept.ac.in" target="_blank">
CEPT University, Ahmedabad
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.msugujarat.ac.in" target="_blank">
MS University – Faculty of Architecture, Baroda
</a>
</div>
</li>
</ol>

<h3 class="highlight" style="margin-top:20px;">
🏫 Private Architecture Colleges (Gujarat)
</h3>

<ol>
<li>
<div class="college-card">
<a href="https://pdeu.ac.in/school-of-architecture" target="_blank">
School of Architecture, PDEU
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://nirmauni.ac.in" target="_blank">
Nirma University – Architecture
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://paruluniversity.ac.in" target="_blank">
Parul University – Architecture
</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://silveroakuni.ac.in" target="_blank">
Silver Oak University – Architecture
</a>
</div>
</li>
</ol>

</div>

<a href="thankyou.php?name=<?php echo urlencode($name); ?>" class="btn">
Thank You
</a>

</div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>
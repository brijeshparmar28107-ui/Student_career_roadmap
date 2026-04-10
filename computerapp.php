<?php  
session_start();

$name   = $_SESSION['username'] ?? ($_GET['name'] ?? "Student");   
$edu    = "Computer Applications";  
$career = $_GET['career'] ?? "IT & Software Field";  
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

<h2>Welcome, <span class="highlight"><?php echo htmlspecialchars($name); ?></span> 💻</h2>

<p>
You selected 
<span class="highlight"><?php echo htmlspecialchars($edu); ?></span> 
as your career path.
</p>

<h1><?php echo $edu; ?></h1>

<div class="section">
<h3 class="highlight">Eligibility</h3>
<p>12th Passed (Any Stream). Mathematics preferred.</p>
</div>

<div class="section">
<h3 class="highlight">Duration</h3>
<p>3 Years</p>
</div>

<div class="section">
<h3 class="highlight">Popular Courses</h3>
<div class="subject-card">
<ul>
    <li>BCA (Bachelor of Computer Applications)</li>
    <li>B.Sc IT (Information Technology)</li>
    <li>B.Sc Computer Science</li>
</ul>
</div>
</div>

<div class="section">
<h3 class="highlight">Key Subjects</h3>
<div class="subject-card">
<ul>
    <li>Programming (C, C++, Java, Python)</li>
    <li>Web Development (HTML, CSS, JavaScript, PHP)</li>
    <li>Data Structures & DBMS</li>
    <li>Operating Systems</li>
    <li>Computer Networks</li>
    <li>Software Engineering</li>
</ul>
</div>
</div>

<div class="section">
<h3 class="highlight">Career Opportunities</h3>
<p>
Software Developer, Web Developer,  
System Administrator, Data Analyst,  
Cyber Security Executive,  
Higher Studies (MCA, M.Sc IT, MBA).
</p>
</div>

<div class="college-section">

<h3 class="highlight">🏛 Government Colleges (Gujarat)</h3>
<ol>

<li>
<div class="college-card">
<a href="https://www.msugujarat.ac.in/" target="_blank">MS University, Baroda</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.saurashtrauniversity.edu/" target="_blank">Saurashtra University</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.gujaratuniversity.ac.in/" target="_blank">Gujarat University</a>
</div>
</li>

</ol>

<h3 class="highlight" style="margin-top:25px;">🏫 Private Colleges (Gujarat)</h3>

<ol>

<li>
<div class="college-card">
<a href="https://nirmauni.ac.in" target="_blank">Nirma University</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://ljku.edu.in" target="_blank">LJ University</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://paruluniversity.ac.in" target="_blank">Parul University</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://silveroakuni.ac.in" target="_blank">Silver Oak University</a>
</div>
</li>

<li>
<div class="college-card">
<a href="https://www.charusat.ac.in" target="_blank">CHARUSAT University</a>
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
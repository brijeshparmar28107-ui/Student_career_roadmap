<?php 
session_start(); 
$name = $_SESSION['username'] ?? "Student";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Allied Health & Bio Careers</title>

<!-- External CSS -->
<link rel="stylesheet" href="style.css">

</head>

<body>
<div class="overlay">
<div class="card">

<h2>Welcome, <span class="highlight"><?php echo htmlspecialchars($name); ?></span> 🏥</h2>

<p>
You selected 
<span class="highlight">Allied Health & Bio Careers</span> 
as your career path.
</p>

<h1>Allied Health Stream</h1>

<h3 class="highlight">Eligibility</h3>
<p>
12th Science (PCB) pass from recognized board.
Admission mostly merit-based or entrance exam based.
</p>

<h3 class="highlight">Duration</h3>
<p>
Diploma: 2 Years | B.Sc: 3-4 Years | M.Sc: 2 Years
</p>

<h3 class="highlight">Popular Courses</h3>

<div class="subject-card">
<ul>
<li>B.Sc Nursing</li>
<li>BPT (Physiotherapy)</li>
<li>B.Sc Radiology</li>
<li>B.Sc Medical Laboratory Technology</li>
<li>B.Sc Operation Theatre Technology</li>
<li>B.Sc Dialysis Technology</li>
<li>B.Sc Anesthesia Technology</li>
</ul>
</div>

<h3 class="highlight">Career Opportunities</h3>
<p>
Hospital Technologist, Radiology Technician,
Physiotherapist, Lab Technician,
Nursing Officer, ICU Specialist,
Healthcare Administrator.
</p>

<a href="thankyou.php?name=<?php echo urlencode($name); ?>" class="btn">
Continue
</a>

</div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>
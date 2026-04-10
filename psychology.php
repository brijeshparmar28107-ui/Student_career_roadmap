<?php
session_start();
$name = $_SESSION['username'] ?? ($_GET['name'] ?? "Student");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Psychology & Counseling</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="overlay">
<div class="card">

<h2>Welcome, <span class="highlight"><?php echo htmlspecialchars($name); ?></span> 🧠</h2>
<p>You selected <span class="highlight">Psychology & Counseling</span>.</p>

<h1>Psychology & Counseling Field</h1>

<h3 class="highlight">Popular Courses</h3>
<div class="subject-card">
<ul>
<li>BA Psychology</li>
<li>B.Sc Psychology</li>
<li>MA Psychology</li>
<li>Clinical Psychology</li>
<li>Counseling & Therapy Courses</li>
</ul>
</div>

<h3 class="highlight">Career Opportunities</h3>
<p>
Psychologist, Counselor, Therapist,  
HR Professional, Mental Health Expert,  
Rehabilitation Specialist.
</p>

<a href="thankyou.php?name=<?php echo urlencode($name); ?>" class="btn">Continue</a>

</div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>
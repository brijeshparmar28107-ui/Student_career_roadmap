<?php
session_start();
$name = $_SESSION['username'] ?? ($_GET['name'] ?? "Student");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Graduation Courses</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="overlay">
<div class="card">

<h2>Welcome, <span class="highlight"><?php echo htmlspecialchars($name); ?></span> 🎓</h2>
<p>You selected <span class="highlight">Graduation</span>.</p>

<h1>Graduation After 12th Arts</h1>

<h3 class="highlight">Popular Courses</h3>
<div class="subject-card">
<ul>
<li>B.A (Bachelor of Arts)</li>
<li>B.Com</li>
<li>BBA</li>
<li>BCA</li>
<li>Bachelor of Social Work (BSW)</li>
<li>Bachelor of Fine Arts (BFA)</li>
</ul>
</div>

<h3 class="highlight">Career Opportunities</h3>
<p>
Teacher, Social Worker, Journalist, Content Writer,  
Government Jobs, Higher Studies (MA, MBA, etc.)
</p>

<a href="thankyou.php?name=<?php echo urlencode($name); ?>" class="btn">Continue</a>

</div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>
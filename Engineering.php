<?php  
session_start();

$name   = $_SESSION['username'] ?? ($_GET['name'] ?? "Student");   
$edu    = "Engineering (B.Tech / B.E.)";  
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

<h2>Welcome <?php echo htmlspecialchars($name); ?> 👋</h2>

<p>
You selected 
<span class="highlight"><?php echo htmlspecialchars($edu); ?></span> 
as your career path.
</p>

<h1><?php echo $edu; ?></h1>

<p>
Engineering is a professional technical degree focused on innovation,
problem-solving and technology development.
</p>

<h3 class="highlight">Eligibility</h3>
<p>
12th Science with <span class="highlight">PCM</span>. 
Admission through JEE Main, GUJCET or state entrance exams.
</p>

<h3 class="highlight">Duration</h3>
<p>4 Years</p>

<h3 class="highlight">Popular Engineering Branches</h3>
<ul>
<li>Computer / IT Engineering</li>
<li>Mechanical Engineering</li>
<li>Civil Engineering</li>
<li>Electrical Engineering</li>
<li>Electronics & Communication</li>
<li>Chemical Engineering</li>
</ul>

<h3 class="highlight">Career Opportunities</h3>
<p>
Software Engineer, Core Engineer, PSU Jobs,
Private Companies, Government Jobs,
Higher Studies (M.Tech / MBA / MS).
</p>

<a href="thankyou.php?name=<?php echo urlencode($name); ?>"
   class="btn">
Continue
</a>

</div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>
<?php  
session_start();

$name = $_SESSION['username'] ?? ($_GET['name'] ?? "Student");   
$edu  = "Diploma After 10th";  
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

<h1>Diploma Courses After 10th</h1>

<p>
Diploma is a technical education option after 10th.
It provides practical knowledge and early career opportunities.
</p>

<h3 class="highlight">Eligibility</h3>
<p>
10th Pass (SSC) from recognized board.
Admission through state diploma admission process.
</p>

<h3 class="highlight">Duration</h3>
<p>3 Years</p>

<h3 class="highlight">Popular Diploma Courses</h3>
<ul>
<li>Diploma in Civil Engineering</li>
<li>Diploma in Mechanical Engineering</li>
<li>Diploma in Electrical Engineering</li>
<li>Diploma in Computer Engineering</li>
<li>Diploma in Architecture Assistant</li>
<li>Diploma in Automobile Engineering</li>
<li>Diploma in Information Technology</li>
<li>Diploma in Interior Design</li>
</ul>

<h3 class="highlight">Career Opportunities</h3>
<p>
Junior Engineer, Supervisor, Technician, Draftsman,
CAD Operator, Government / Private Jobs,
Higher Studies through Lateral Entry.
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
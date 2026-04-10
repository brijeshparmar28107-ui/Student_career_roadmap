<?php
session_start();
$name   = $_SESSION['username'] ?? ($_GET['name'] ?? "Student");
$edu    = $_GET['edu'] ?? "";
$career = $_GET['career'] ?? "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Science Stream Details</title>

<!-- External CSS Link -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="overlay">
    <div class="card">

        <h2>Welcome <?php echo htmlspecialchars($name); ?> 👋</h2>

        <p>
            You selected 
            <span class="highlight"><?php echo htmlspecialchars($edu); ?></span>
            with interest in 
            <span class="highlight"><?php echo htmlspecialchars($career); ?></span>.
        </p>

        <h1>Science After 10th</h1>

        <p>
            Science offers two main groups after 10th grade.
            Each group opens different career opportunities.
        </p>

        <h3 class="highlight">Group A (PCM)</h3>
        <p>
            Physics, Chemistry, Mathematics — Best for Engineering,
            IT, Architecture, and Technical fields.
        </p>

        <h3 class="highlight">Group B (PCB)</h3>
        <p>
            Physics, Chemistry, Biology — Best for Medical, Pharmacy,
            Agriculture, Nursing, and Life Sciences.
        </p>

        <p>
            Choose wisely according to your interest, strengths,
            and long-term career goals.
        </p>

        <a href="thankyou.php?name=<?php echo urlencode($name); ?>" 
           target="_blank" 
           class="btn">
           Thank You
        </a>

    </div>
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>
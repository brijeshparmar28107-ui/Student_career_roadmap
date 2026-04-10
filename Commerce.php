<?php
$conn = mysqli_connect("localhost", "root", "", "arb");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

session_start();
$name   = $_SESSION['username'] ?? ($_GET['name'] ?? "Student");
$edu    = $_GET['edu'] ?? "";
$career = $_GET['career'] ?? "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Commerce Stream Details</title>

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
            with interest in 
            <span class="highlight"><?php echo htmlspecialchars($career); ?></span>.
        </p>

        <h1>Commerce After 10th</h1>

        <p>
            Commerce is the best choice if you are interested in business,
            finance, or management. It opens multiple professional courses
            and career paths.
        </p>

        <h3 class="highlight">Core Subjects</h3>
        <p>
            Accountancy, Business Studies, Economics, English,
            Mathematics (optional).
        </p>

        <h3 class="highlight">Popular Career Options</h3>
        <p>
            CA (Chartered Accountant), CS (Company Secretary), CMA,
            B.Com, BBA, MBA, Banking, Finance, Business Management.
        </p>

        <p>
            Commerce is the backbone of business and trade.
            Choose this stream if you have interest in numbers,
            business strategies, and economics.
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
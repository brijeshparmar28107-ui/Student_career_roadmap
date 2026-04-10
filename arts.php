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
<title>Arts Stream Details</title>  

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

        <h1>Arts After 10th</h1>  

        <p>
            The Arts stream focuses on creativity, culture, literature,
            and social studies. It provides a wide range of career opportunities.
        </p>  

        <h3 class="highlight">Main Subjects</h3>  
        <p>
            History, Geography, Political Science, Psychology,
            Sociology, Economics, Languages
        </p>  

        <h3 class="highlight">Career Options</h3>  
        <p>
            UPSC, Law, Journalism, Teaching, Social Work,
            Literature, Fine Arts, Designing, Civil Services
        </p>  

        <p>
            Arts combines imagination and knowledge,
            leading to careers in society, culture, and creativity.
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
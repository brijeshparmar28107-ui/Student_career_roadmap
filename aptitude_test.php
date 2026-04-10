<?php
session_start();
include 'includes/db_connect.php';

$_SESSION['user_id'] = 1; // demo login
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Career Assessment Test</title>

<style>
*{
    box-sizing:border-box;
    font-family:'Segoe UI', Arial, sans-serif;
}

body{
    margin:0;
    min-height:100vh;
    background: url('photo4.jpeg') no-repeat center center/cover;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
}

/* Overlay for better contrast */
body::before{
    content:'';
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.55);
    z-index:-1;
}

/* Main Container */
.container{
    width:100%;
    max-width:900px;
    background: rgba(255,255,255,0.18);
    backdrop-filter: blur(14px);
    border-radius:18px;
    padding:30px 35px;
    box-shadow:0 15px 40px rgba(0,0,0,0.4);
    color:#fff;
}

/* Heading */
.container h2{
    text-align:center;
    margin-bottom:25px;
    font-size:30px;
    letter-spacing:1px;
}

/* Question Box */
.question{
    background: rgba(255,255,255,0.15);
    padding:18px 20px;
    border-radius:12px;
    margin-bottom:18px;
}

/* Question Text */
.question p{
    margin:0 0 12px;
    font-size:18px;
    font-weight:600;
}

/* Options */
.options label{
    display:block;
    margin-bottom:10px;
    cursor:pointer;
}

.options span{
    display:block;
    padding:10px 14px;
    border-radius:8px;
    background: rgba(255,255,255,0.18);
    transition:0.3s;
}

.options label:hover span{
    background: rgba(255,255,255,0.30);
}

/* Hide radio */
.options input[type="radio"]{
    display:none;
}

/* Checked option */
.options input[type="radio"]:checked + span{
    background:#28a745;
    color:#fff;
}

/* Submit Button */
button{
    width:100%;
    padding:15px;
    border:none;
    border-radius:10px;
    font-size:18px;
    font-weight:bold;
    cursor:pointer;
    background:#ffc107;
    color:#000;
    transition:0.3s;
    margin-top:20px;
}

button:hover{
    background:#ffb300;
}

/* Responsive */
@media(max-width:600px){
    .container{
        padding:22px;
    }
    .container h2{
        font-size:24px;
    }
}
/* 📱 Mobile Responsive */
@media (max-width: 768px) {

    .box, .container {
        width: 90% !important;
        padding: 25px !important;
    }

    h2 {
        font-size: 22px !important;
    }

    p {
        font-size: 14px !important;
    }

    button, select, .btn {
        font-size: 14px !important;
        padding: 10px !important;
    }
}

@media (max-width: 480px) {

    .box, .container {
        width: 95% !important;
        padding: 20px !important;
    }

    h2 {
        font-size: 20px !important;
    }

    button, select, .btn {
        font-size: 13px !important;
        padding: 9px !important;
    }
}
</style>
</head>

<body>

<div class="container">
    <h2>Career Assessment Test</h2>

    <form method="post" action="result.php">

    <?php
    $q = mysqli_query($conn, "SELECT * FROM questions");
    $qn = 1;
    while($row = mysqli_fetch_assoc($q)){
    ?>
        <div class="question">
            <p><?php echo "Q".$qn.". ".$row['question_text']; ?></p>

            <div class="options">
                <label>
                    <input type="radio" name="answers[<?php echo $row['id']; ?>]" value="A" required>
                    <span>a. <?php echo $row['option_a']; ?></span>
                </label>

                <label>
                    <input type="radio" name="answers[<?php echo $row['id']; ?>]" value="B">
                    <span>b. <?php echo $row['option_b']; ?></span>
                </label>

                <label>
                    <input type="radio" name="answers[<?php echo $row['id']; ?>]" value="C">
                    <span>c. <?php echo $row['option_c']; ?></span>
                </label>

                <label>
                    <input type="radio" name="answers[<?php echo $row['id']; ?>]" value="D">
                    <span>d. <?php echo $row['option_d']; ?></span>
                </label>
            </div>
        </div>
    <?php
        $qn++;
    }
    ?>

        <button type="submit">Submit Test</button>
    </form>
</div>

</body>
</html>

<?php
session_start();

$score = 0;
$result = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $answers = [
        "q1"=>"a","q2"=>"b","q3"=>"c","q4"=>"a","q5"=>"b",
        "q6"=>"c","q7"=>"a","q8"=>"b","q9"=>"c","q10"=>"a"
    ];

    $score = 0;

    foreach($answers as $q => $ans){
        if(isset($_POST[$q]) && $_POST[$q] == $ans){
            $score++;
        }
    }

    $_SESSION['score'] = $score;
    $_SESSION['total'] = 10;

    header("Location: result.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>10th Career Test</title>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;

    background-image: url("photo2.jpg");
    background-size: cover;
    background-position: center;
}

.container {
    width: 420px;
    max-height: 90vh;
    overflow-y: auto;
    padding: 30px;
    border-radius: 18px;
    text-align: left;

    background: rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);

    box-shadow: 0 15px 35px rgba(0,0,0,0.3);
}

h2 {
    color: #fff;
    text-align: center;
    margin-bottom: 15px;
}

.question {
    margin-bottom: 15px;
    color: #fff;
}

button {
    width: 100%;
    padding: 12px;
    border-radius: 8px;
    border: none;
    background: #28a745;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

.result {
    margin-top: 15px;
    font-weight: bold;
    color: #fff;
    text-align: center;
}
</style>
</head>

<body>

<div class="container">
<h2>10th Career Test</h2>

<form method="post">

<div class="question">
<p>1. Which subject do you like most?</p>
<input type="radio" name="q1" value="a"> Science<br>
<input type="radio" name="q1" value="b"> Commerce<br>
<input type="radio" name="q1" value="c"> Arts
</div>

<div class="question">
<p>2. What do you enjoy?</p>
<input type="radio" name="q2" value="a"> Experiments<br>
<input type="radio" name="q2" value="b"> Business<br>
<input type="radio" name="q2" value="c"> Creativity
</div>

<div class="question">
<p>3. Your dream job?</p>
<input type="radio" name="q3" value="a"> Engineer<br>
<input type="radio" name="q3" value="b"> Businessman<br>
<input type="radio" name="q3" value="c"> Artist
</div>

<div class="question">
<p>4. Do you like solving problems?</p>
<input type="radio" name="q4" value="a"> Yes<br>
<input type="radio" name="q4" value="b"> Sometimes<br>
<input type="radio" name="q4" value="c"> No
</div>

<div class="question">
<p>5. What interests you most?</p>
<input type="radio" name="q5" value="a"> Machines<br>
<input type="radio" name="q5" value="b"> Money<br>
<input type="radio" name="q5" value="c"> Art
</div>

<div class="question">
<p>6. Which activity do you prefer?</p>
<input type="radio" name="q6" value="a"> Lab Work<br>
<input type="radio" name="q6" value="b"> Office Work<br>
<input type="radio" name="q6" value="c"> Creative Work
</div>

<div class="question">
<p>7. Do you like technology?</p>
<input type="radio" name="q7" value="a"> Yes<br>
<input type="radio" name="q7" value="b"> Little<br>
<input type="radio" name="q7" value="c"> No
</div>

<div class="question">
<p>8. Your strength?</p>
<input type="radio" name="q8" value="a"> Logic<br>
<input type="radio" name="q8" value="b"> Business Mind<br>
<input type="radio" name="q8" value="c"> Creativity
</div>

<div class="question">
<p>9. What do you enjoy most?</p>
<input type="radio" name="q9" value="a"> Research<br>
<input type="radio" name="q9" value="b"> Trading<br>
<input type="radio" name="q9" value="c"> Designing
</div>

<div class="question">
<p>10. What type of career do you want?</p>
<input type="radio" name="q10" value="a"> Technical<br>
<input type="radio" name="q10" value="b"> Business<br>
<input type="radio" name="q10" value="c"> Creative
</div>

<button type="submit">Submit Test</button>

</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<div class='result'>Score: $score / 10</div>";
    echo "<div class='result'>Recommended: $result</div>";
}
?>

</div>

</body>
</html>
<?php
session_start();
include 'includes/db_connect.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$allowed = [
  "10th" => ["Science", "Commerce", "Arts","Diploma"],
  "12th Science (PCM)" => ["Engineering", "Computer Application","Architecture","B.Sc"],
  "12th Science (PCB)" => ["Medical", "Paramedical", "Pharmacy","Life Science & Research","Allied Health & Bio Careers"],
  "12th Commerce" => ["Accounting & Finance", "Management & Business", "Banking & Insurance", "Computer Application","Law & Government"],
  "12th Arts" => ["Graduation", "Law & Civil Services", "Management & Business","Psychology & Counseling"]
];

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $education = $_POST['education'] ?? "";
    $career    = $_POST['career'] ?? "";

    if ($education == "" || $career == "") {
        $msg = "Please select education and career";
    } else {

        // 🔹 Save selection
        $uid = $_SESSION['user_id'];
        mysqli_query($conn,
  "UPDATE users 
   SET selected_career='$career'
   WHERE id='$uid'"
);


        if ($education === "10th" && $career === "Science") {
            header("Location: science_info.php");
            exit();
        }
     
        if ($education === "10th" && $career === "Commerce") {
            header("Location: Commerce.php");
            exit();
        }
      
        if ($education === "10th" && $career === "Arts") {
            header("Location: arts.php");
            exit();
        }
        
        if ($education === "10th" && $career === "Diploma") {
            header("Location: diploma.php");
            exit();
        }
        
        if ($education === "12th Science (PCM)" && $career === "Engineering") {
            header("Location: Engineering.php");
            exit();
        }
        
        if ($education === "12th Science (PCM)" && $career === "Computer Application") {
            header("Location: computerapp.php");
            exit();
            }
       
        if ($education === "12th Science (PCM)" && $career === "Architecture") {
            header("Location: architecture.php");
            exit();
        }
     
        if ($education === "12th Science (PCM)" && $career === "B.Sc") {
            header("Location: bsc_courses.php");
            exit();
        }
        
        if ($education === "12th Science (PCB)" && $career === "Medical") {
            header("Location: medical.php");
            exit();
        }
       
        if ($education === "12th Science (PCB)" && $career === "Paramedical") {
            header("Location: paramedical.php");
            exit();
        }
      
        if ($education === "12th Science (PCB)" && $career === "Pharmacy") {
            header("Location: pharmacy.php");
            exit();
        }
        
        if ($education === "12th Science (PCB)" && $career === "Life Science & Research") {
            header("Location: lifescience.php");
            exit();
        }
        if ($education === "12th Science (PCB)" && $career === "Allied Health & Bio Careers") {
            header("Location: allied_health.php");
            exit();
        }

        if ($education === "12th Commerce" && $career === "Accounting & Finance") {
          header("Location: accounting.php");
          exit();
        }

        if ($education === "12th Commerce" && $career === "Management & Business") {
            header("Location: management.php");
            exit();
        }

        if ($education === "12th Commerce" && $career === "Banking & Insurance") {
            header("Location: banking.php");
            exit();
        }

        if ($education === "12th Commerce" && $career === "Computer Application") {
            header("Location: computer.php");
            exit();
        }

        if ($education === "12th Commerce" && $career === "Law & Government") {
            header("Location: law.php");
            exit();
        }

        if ($education === "12th Arts" && $career === "Graduation") {
            header("Location: graduation.php");
         exit();
        }

        if ($education === "12th Arts" && $career === "Law & Civil Services") {
          header("Location: law_civil.php");
         exit();
        }

        if ($education === "12th Arts" && $career === "Psychology & Counseling") {
         header("Location: psychology.php");
         exit();
        }
         if ($education === "12th Arts" && $career === "Management & Business") {
            header("Location: management.php");
            exit();
        }
        // 🔹 Default roadmap
        header("Location: final_roadmap.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Select Education</title>

<style>
body{
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background: url("photo3.jpg") no-repeat center/cover;
    font-family: Arial, sans-serif;
}

.box{
    width:420px;
    padding:30px;
    background: rgba(255,255,255,0.25);
    backdrop-filter: blur(12px);
    border-radius:16px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.3);
    text-align:center;
}

h2{
    color:#fff;
    margin-bottom:20px;
}

select, button{
    width:100%;
    padding:12px;
    margin:12px 0;
    border-radius:8px;
    border:none;
    font-size:15px;
}

select{
    background:#fff;
    color:#000;
}

button{
    background:#007bff;
    color:#fff;
    font-size:16px;
    cursor:pointer;
}

.error{
    color:#ffdede;
    font-size:14px;
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

<div class="box">
    <h2>Select Education</h2>

    <?php if($msg): ?>
        <p class="error"><?php echo $msg; ?></p>
    <?php endif; ?>

    <form method="post">

        <select id="education" name="education" required>
            <option value="">-- Select Education --</option>
            <?php foreach($allowed as $edu => $list): ?>
                <option value="<?php echo $edu; ?>"><?php echo $edu; ?></option>
            <?php endforeach; ?>
        </select>

        <select id="career" name="career" required disabled>
            <option value="">-- Select Career --</option>
        </select>

        <button type="submit">Continue</button>
    </form>
</div>

<script>
const careerMap = <?php echo json_encode($allowed); ?>;

const eduSel = document.getElementById("education");
const carSel = document.getElementById("career");

eduSel.addEventListener("change", () => {
    carSel.innerHTML = "<option value=''>-- Select Career --</option>";

    if (careerMap[eduSel.value]) {
        careerMap[eduSel.value].forEach(c => {
            let opt = document.createElement("option");
            opt.value = c;
            opt.textContent = c;
            carSel.appendChild(opt);
        });
        carSel.disabled = false;
    } else {
        carSel.disabled = true;
    }
});
</script>

</body>
</html>

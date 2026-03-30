<?php include 'user_sidebar.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>BMI Calculator</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/style.css" rel="stylesheet">

</head>

<body>

<input type="checkbox" id="toggle">

<div class="main-content">

<h2 class="text-center">📏 BMI Calculator</h2>

<div class="card-box">

    <!-- INPUT -->
    <div class="mb-3">
        <label>Height (cm)</label>
        <input type="number" id="height" class="form-control" placeholder="Enter height">
    </div>

    <div class="mb-3">
        <label>Weight (kg)</label>
        <input type="number" id="weight" class="form-control" placeholder="Enter weight">
    </div>

    <button class="btn btn-main" onclick="calculateBMI()">Calculate BMI</button>

    <!-- RESULT -->
    <div id="result" class="result-box" style="display:none;">
        <div class="bmi-value" id="bmiValue"></div>
        <div id="bmiStatus"></div>
    </div>

</div>

</div>

<script>

function calculateBMI(){
    let h = document.getElementById("height").value;
    let w = document.getElementById("weight").value;

    if(h == "" || w == ""){
        alert("Please enter all values");
        return;
    }

    let heightM = h / 100;
    let bmi = w / (heightM * heightM);
    bmi = bmi.toFixed(1);

    let status = "";
    let color = "";

    if(bmi < 18.5){
        status = "Underweight";
        color = "#ffc107";
    }
    else if(bmi >= 18.5 && bmi < 25){
        status = "Normal";
        color = "#28a745";
    }
    else if(bmi >= 25 && bmi < 30){
        status = "Overweight";
        color = "#fd7e14";
    }
    else{
        status = "Obese";
        color = "#dc3545";
    }

    document.getElementById("result").style.display = "block";
    document.getElementById("bmiValue").innerText = bmi;
    document.getElementById("bmiStatus").innerText = status;
    document.getElementById("bmiStatus").style.color = color;
}

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
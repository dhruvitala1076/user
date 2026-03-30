<?php include 'user_sidebar.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>My Fitness</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/style.css" rel="stylesheet">

</head>

<body>

<input type="checkbox" id="toggle">

<div class="main-content">

<h2 class="mb-4">My Fitness Dashboard 💪</h2>

<!-- BMI -->
<div class="card-box">
    <div class="aboutsection-title">BMI Overview</div>

    <div class="bmi-wrapper">

        <div class="bmi-circle">
            <div class="bmi-inner">
                <div class="bmi-value">22.0</div>
                <div class="bmi-status">Normal</div>
            </div>
        </div>

        <div>
            <p><strong>Healthy Range:</strong> 18.5 - 24.9</p>
            <p><strong>Advice:</strong> Keep your current routine 👍</p>
        </div>

    </div>
</div>

<!-- PROGRESS -->
<div class="card-box">
    <div class="aboutsection-title">Fitness Progress</div>

    <p>Weight Goal</p>
    <div class="progress mb-3">
        <div class="progress-bar" style="width:70%"></div>
    </div>

    <p>Workout Completion</p>
    <div class="progress mb-3">
        <div class="progress-bar" style="width:80%"></div>
    </div>

    <p>Diet Plan</p>
    <div class="progress">
        <div class="progress-bar" style="width:60%"></div>
    </div>
</div>

<!-- DAILY STATS -->
<div class="card-box">
    <div class="aboutsection-title">Daily Stats</div>

    <div class="profile-grid">
        <div>🔥 Calories Burned: <b>1200 kcal</b></div>
        <div>🚶 Steps: <b>8500</b></div>
        <div>💧 Water Intake: <b>2.5 L</b></div>
        <div>😴 Sleep: <b>7 hrs</b></div>
    </div>
</div>

<!-- PERSONALIZED PLAN -->
<div class="card-box">
    <div class="aboutsection-title">Personalized Plan</div>

    <div class="plan-box">
        🥗 Breakfast: Oats + Fruits + Milk
    </div>

    <div class="plan-box">
        🍛 Lunch: Rice + Dal + Vegetables
    </div>

    <div class="plan-box">
        🏋️ Workout: 30 min Cardio + 20 min Strength
    </div>

    <div class="plan-box">
        🌙 Dinner: Light Salad + Soup
    </div>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
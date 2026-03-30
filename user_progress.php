<?php include 'user_sidebar.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Progress</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/style.css" rel="stylesheet">

</head>

<body>

<input type="checkbox" id="toggle">

<div class="main-content">

<h2>📊 Your Progress</h2>
<p>Track your fitness journey</p>

<!-- TOP STATS -->
<div class="row mt-3">

    <div class="col-md-4">
        <div class="stat">
            <h5>Current Weight</h5>
            <h2>60 kg</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="stat">
            <h5>Goal Weight</h5>
            <h2>55 kg</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="stat">
            <h5>Calories Burned</h5>
            <h2>1200 kcal</h2>
        </div>
    </div>

</div>
<br>
<!-- WEIGHT PROGRESS -->
<div class="card-box">
    <h4>⚖ Weight Progress</h4>
    <p>60kg → 55kg</p>

    <div class="progress">
        <div class="progress-bar" style="width:60%"></div>
    </div>
</div>

<!-- WORKOUT -->
<div class="card-box">
    <h4>🏋 Workout Progress</h4>
    <p>Completed 24 out of 30 sessions</p>

    <div class="progress">
        <div class="progress-bar" style="width:80%"></div>
    </div>
</div>

<!-- DIET -->
<div class="card-box">
    <h4>🥗 Diet Plan Progress</h4>
    <p>Following diet plan consistency</p>

    <div class="progress">
        <div class="progress-bar" style="width:70%"></div>
    </div>
</div>

<!-- WEEKLY SUMMARY -->
<div class="card-box">
    <h4>📅 Weekly Summary</h4>

    <ul>
        <li>✔ 5 Workouts completed</li>
        <li>✔ 2 Cheat meals</li>
        <li>✔ Average sleep: 7 hrs</li>
        <li>✔ Water intake maintained</li>
    </ul>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
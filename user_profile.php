<?php include 'user_sidebar.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>My Profile</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/style.css" rel="stylesheet">

</head>

<body>

<input type="checkbox" id="toggle">

<div class="main-content">

<!-- PROFILE HEADER -->
<div class="card-box">
    <div class="mprofile-flex">

        <img src="https://via.placeholder.com/120" class="mprofile-img">

        <div class="mprofile-info">
            <h3>Dhruvi Tala</h3>
            <p>dhruvi@email.com</p>
            <small>Member since 2024</small>

            <br>
            <a href="user_editprofile.php" class="btn profile-btn-blue btn-sm mt-2">
                Edit Profile
            </a>
        </div>

    </div>
</div>

<!-- FULL INFORMATION -->
<div class="card-box">
    <h5>Personal Details</h5>

    <div class="profile-grid">

        <div>
            <div class="label">Age</div>
            <div class="value">21</div>
        </div>

        <div>
            <div class="label">Height</div>
            <div class="value">165 cm</div>
        </div>

        <div>
            <div class="label">Weight</div>
            <div class="value">60 kg</div>
        </div>

        <div>
            <div class="label">Goal</div>
            <div class="value">Weight Loss</div>
        </div>

        <div>
            <div class="label">Activity Level</div>
            <div class="value">Intermediate</div>
        </div>

        <div>
            <div class="label">City</div>
            <div class="value">Rajkot</div>
        </div>

        <div>
            <div class="label">Phone</div>
            <div class="value">9876543210</div>
        </div>

        <div>
            <div class="label">Gender</div>
            <div class="value">Female</div>
        </div>
        <div>
            <div class="label">BMI</div>
            <div class="value">22.0</div>
        </div>
    </div>
</div>

<!-- BMI -->
<div class="card-box">
    <h5>BMI</h5>

    <div class="bmi-box">
        <div class="bmi-value">22.0</div>
        <div class="text-success">Normal</div>
    </div>
</div>

<!-- PROGRESS -->
<div class="card-box">
    <h5>Fitness Progress</h5>

    <p>Weight Goal</p>
    <div class="progress mb-3">
        <div class="progress-bar" style="width:70%"></div>
    </div>

    <p>Workout</p>
    <div class="progress mb-3">
        <div class="progress-bar" style="width:80%"></div>
    </div>

    <p>Diet</p>
    <div class="progress">
        <div class="progress-bar" style="width:60%"></div>
    </div>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php include 'user_sidebar.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Diet Plan</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/style.css" rel="stylesheet">
</head>

<body>

<input type="checkbox" id="toggle">

<div class="main-content">

<h2>🥗 Your Daily Diet Plan</h2>
<p>Maintain a balanced and healthy diet</p>

<!-- BREAKFAST -->
<div class="card-box">
    <h4>🍳 Breakfast</h4>

    <div class="meal">
        <h5>Oats + Fruits</h5>
        <p>Healthy oats with banana & apple</p>
        <div class="cal">Calories: 250 kcal</div>
    </div>

    <div class="meal">
        <h5>Boiled Eggs</h5>
        <p>2 eggs for protein</p>
        <div class="cal">Calories: 150 kcal</div>
    </div>
</div>

<!-- LUNCH -->
<div class="card-box">
    <h4>🍛 Lunch</h4>

    <div class="meal">
        <h5>Roti + Sabji</h5>
        <p>2 roti with green vegetables</p>
        <div class="cal">Calories: 400 kcal</div>
    </div>

    <div class="meal">
        <h5>Dal</h5>
        <p>Protein rich lentils</p>
        <div class="cal">Calories: 200 kcal</div>
    </div>
</div>

<!-- SNACKS -->
<div class="card-box">
    <h4>🍎 Snacks</h4>

    <div class="meal">
        <h5>Dry Fruits</h5>
        <p>Almonds & walnuts</p>
        <div class="cal">Calories: 150 kcal</div>
    </div>

    <div class="meal">
        <h5>Green Tea</h5>
        <p>Boost metabolism</p>
        <div class="cal">Calories: 20 kcal</div>
    </div>
</div>

<!-- DINNER -->
<div class="card-box">
    <h4>🍽 Dinner</h4>

    <div class="meal">
        <h5>Soup + Salad</h5>
        <p>Light dinner for weight loss</p>
        <div class="cal">Calories: 200 kcal</div>
    </div>
</div>

<!-- WATER -->
<div class="card-box water-box">
    <h4>💧 Water Intake</h4>
    <h2>2.5 Liters</h2>
</div>

<!-- BUTTON -->
<div class="card-box">
    <button class="btn btn-main">Customize Diet Plan</button>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
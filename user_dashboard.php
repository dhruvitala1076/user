<?php 
session_start();
include 'db_config.php';
include 'user_sidebar.php';

// CHECK LOGIN
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// FETCH USER DATA FIRST
$query = "SELECT * FROM user_dashboard WHERE user_id='$user_id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

// HANDLE MEMBERSHIP UPDATE
if(isset($_POST['plan'])){
    $plan = $_POST['plan'];

    $old_activity = $data['last_activity'] ?? '';
    $new_activity = "Upgraded to $plan";

    $all_activity = $new_activity . "|" . $old_activity;

    mysqli_query($conn, "UPDATE user_dashboard 
        SET membership='$plan',
            last_activity='$all_activity',
            activity_date=NOW()
        WHERE user_id='$user_id'");

    header("Location: user_dashboard.php");
    exit();
}

// DEFAULT VALUES
$workouts = $data['workouts'] ?? 0;
$calories = $data['calories'] ?? 0;
$steps = $data['steps'] ?? 0;
$progress = $steps ? round(($steps / 10000) * 100) : 0;
$water = $data['water'] ?? '0L';
$sleep = $data['sleep'] ?? '0 hrs';
$membership = $data['membership'] ?? 'Basic';
$last_activity = $data['last_activity'] ?? 'No Activity';
$activity_date = $data['activity_date'] ?? date("Y-m-d H:i:s");

// QUICK ACTION
$actions = [
    ["Check BMI", "user_bmi.php"],
    ["View Progress", "user_progress.php"],
    ["Diet Plan", "user_mydiet.php"]
];
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="assets/style.css" rel="stylesheet">

</head>

<body>

<input type="checkbox" id="toggle">

<div class="main-content">

<h2>Welcome Back 💪</h2>

<!-- MEMBERSHIP -->
<div class="card-box">
    <h4>💎 Membership</h4>

    <div class="row mt-3">

        <?php 
        $plans = [
            ["Basic", "₹299", "Start"],
            ["Premium", "₹499", "Upgrade"],
            ["Pro", "₹999", "Go Pro"]
        ];

        foreach($plans as $p){ ?>
        <div class="col-md-4">
            <div class="plan-card text-center">
                <h5>
                    <?php echo $p[0]; ?>
                    <?php if($membership==$p[0]) echo '✅'; ?>
                </h5>
                <div class="price"><?php echo $p[1]; ?></div>

                <form method="POST">
                    <input type="hidden" name="plan" value="<?php echo $p[0]; ?>">
                    <button class="btn dashboard-btn-main">
                        <?php echo $p[2]; ?>
                    </button>
                </form>
            </div>
        </div>
        <?php } ?>

    </div>
</div>

<!-- TOP STATS -->
<div class="row mt-3">
    <div class="col-md-3">
        <div class="card-box text-center">
            <h5>Workouts</h5>
            <h2><?php echo $workouts; ?></h2>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card-box text-center">
            <h5>Calories</h5>
            <h2><?php echo $calories; ?> kcal</h2>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card-box text-center">
            <h5>Steps</h5>
            <h2><?php echo $steps; ?></h2>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card-box text-center">
            <h5>Progress</h5>
            <h2><?php echo $progress; ?>%</h2>
        </div>
    </div>
</div>

<!-- DAILY ACTIVITY -->
<div class="card-box">
    <h4>🔥 Daily Activity</h4>

    <div class="row mt-3">
        <div class="col-md-4">
            <div class="small-card text-center">
                <div class="abouticon">🚶</div>
                <h5>Steps</h5>
                <p><?php echo $steps; ?></p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="small-card text-center">
                <div class="abouticon">💧</div>
                <h5>Water</h5>
                <p><?php echo $water; ?></p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="small-card text-center">
                <div class="abouticon">😴</div>
                <h5>Sleep</h5>
                <p><?php echo $sleep; ?></p>
            </div>
        </div>
    </div>
</div>

<!-- QUICK ACTION -->
<div class="card-box">
    <h4>⚡ Quick Actions</h4>

    <div class="row">
        <?php foreach($actions as $a){ ?>
        <div class="col-md-4">
            <a href="<?php echo $a[1]; ?>" class="btn btn-main w-100">
                <?php echo $a[0]; ?>
            </a>
        </div>
        <?php } ?>
    </div>
</div>

<!-- RECENT ACTIVITY -->
<div class="card-box">
    <h4>📊 Recent Activity</h4>

    <?php 
    $activities = explode("|", $last_activity);

    foreach($activities as $act){
        if($act != ""){
    ?>
        <div class="activity d-flex justify-content-between">
            <span><?php echo $act; ?></span>
            <span><?php echo date("d M", strtotime($activity_date)); ?></span>
        </div>
    <?php 
        }
    } 
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</div>
</body>
</html>
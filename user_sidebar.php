<!DOCTYPE html>
<html>
<head>
<title>Sidebar Fixed</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="assets/s.css" rel="stylesheet">


</head>

<body>

<input type="checkbox" id="toggle">

<!-- 🔥 NEW TOPBAR -->
<div class="topbar">

    <div class="left">
        <label for="toggle" class="menu-btn">
            <i class="fa fa-bars"></i>
        </label>
        <span class="logo-text">FITLIFE</span>
    </div>

    <div class="right">
        <i class="fa fa-bell"></i>
        <i class="fa fa-user-circle"></i>
    </div>

</div>

<!-- SIDEBAR -->
<div class="sidebar">

    <div class="logo">
        <span>FITLIFE</span>

        <label for="toggle" class="close-btn">
            <i class="fa fa-times"></i>
        </label>
    </div>

    <a href="user_dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
    <a href="user_profile.php"><i class="fa fa-user"></i> My Profile</a>
    <a href="user_editprofile.php"><i class="fa fa-edit"></i> Edit Profile</a>
    <a href="user_changepassword.php"><i class="fa fa-key"></i> Change Password</a>
    <a href="user_fitness.php"><i class="fa fa-heartbeat"></i> Fitness</a>
    <a href="user_about.php"><i class="fa fa-info-circle"></i> About</a>
    <a href="user_help.php"><i class="fa fa-question-circle"></i> Help</a>
    <a href="user_logout.php"><i class="fa fa-arrow-left"></i> Logout</a>

</div>

<script>

// AUTO CLOSE ON SMALL SCREEN
function handleSidebar() {
    const toggle = document.getElementById("toggle");

    if (window.innerWidth <= 992) {
        toggle.checked = false;
    }
}

window.addEventListener("load", handleSidebar);
window.addEventListener("resize", handleSidebar);

// AUTO CLOSE AFTER CLICK (MOBILE)
document.querySelectorAll(".sidebar a").forEach(link => {
    link.addEventListener("click", function() {
        if (window.innerWidth <= 992) {
            document.getElementById("toggle").checked = false;
        }
    });
});

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
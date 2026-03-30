<?php include 'user_sidebar.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<link href="assets/style.css" rel="stylesheet">

</head>
<body>

<div class="main-content">

<div class="changep-card-box">

<!-- 🔙 BACK + TITLE -->
<div class="d-flex align-items-center mb-3">
    <button class="back-arrow" onclick="goBack()">
        <i class="fa fa-arrow-left"></i>
    </button>

    <h4 class="mx-auto">Change Password</h4>
</div>

<form id="passwordForm" novalidate>

<!-- OLD PASSWORD -->
<div class="mb-3 changep-position-relative">
<label>Old Password</label>
<input type="password" name="oldpass" class="form-control">
<span class="changep-eye" onclick="togglePassword(this)">
    <i class="fa fa-eye"></i>
</span>
</div>

<!-- NEW PASSWORD -->
<div class="mb-3 changep-position-relative">
<label>New Password</label>
<input type="password" name="newpass" class="form-control">
<span class="changep-eye" onclick="togglePassword(this)">
    <i class="fa fa-eye"></i>
</span>
</div>

<!-- CONFIRM PASSWORD -->
<div class="mb-3 changep-position-relative">
<label>Confirm Password</label>
<input type="password" name="confirmpass" class="form-control">
<span class="changep-eye" onclick="togglePassword(this)">
    <i class="fa fa-eye"></i>
</span>
</div>

<button type="submit" class="btn btn-success w-100">Update Password</button>

</form>

</div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>

// 🔙 BACK FUNCTION
function goBack() {
    if(document.referrer !== ""){
        window.history.back();
    } else {
        window.location.href = "user_editprofile.php";
    }
}

// 👁️ SHOW / HIDE PASSWORD
function togglePassword(icon){
    let input = $(icon).siblings("input");
    let i = $(icon).find("i");

    if(input.attr("type") === "password"){
        input.attr("type","text");
        i.removeClass("fa-eye").addClass("fa-eye-slash");
    } else {
        input.attr("type","password");
        i.removeClass("fa-eye-slash").addClass("fa-eye");
    }
}

// VALIDATION
$(document).ready(function(){

$("#passwordForm").submit(function(e){

$(".changep-error").remove();
$("input").removeClass("changep-error-border");

let valid = true;

let oldpass = $("[name='oldpass']").val().trim();
let newpass = $("[name='newpass']").val().trim();
let confirmpass = $("[name='confirmpass']").val().trim();

// OLD
if(oldpass == ""){
    $("[name='oldpass']").after("<div class='changep-error'>Enter old password</div>").addClass("changep-error-border");
    valid = false;
}

// NEW
if(newpass == ""){
    $("[name='newpass']").after("<div class='changep-error'>Enter new password</div>").addClass("changep-error-border");
    valid = false;
}
else if(newpass.length < 8){
    $("[name='newpass']").after("<div class='changep-error'>Minimum 8 characters required</div>").addClass("changep-error-border");
    valid = false;
}

// CONFIRM
if(confirmpass == ""){
    $("[name='confirmpass']").after("<div class='changep-error'>Confirm password</div>").addClass("changep-error-border");
    valid = false;
}
else if(confirmpass !== newpass){
    $("[name='confirmpass']").after("<div class='changep-error'>Password not match</div>").addClass("changep-error-border");
    valid = false;
}

if(!valid){
    e.preventDefault();
}

});

});

</script>

</body>
</html>
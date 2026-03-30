<?php include 'user_sidebar.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Help & Support</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/style.css" rel="stylesheet">

</head>
<body>

<div class="main-content">

<!-- TITLE -->
<h2 class="aboutsection-title">Help & Support 💬</h2>

<!-- FAQ SECTION -->
<div class="card-box">
    <h5>Frequently Asked Questions</h5>

    <div class="accordion mt-3" id="faq">

        <!-- Q1 -->
        <div class="accordion-item bg-transparent border-0">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#q1">
                    How to calculate BMI?
                </button>
            </h2>
            <div id="q1" class="accordion-collapse collapse" data-bs-parent="#faq">
                <div class="accordion-body">
                    Go to BMI page → Enter height & weight → Click calculate.
                </div>
            </div>
        </div>

        <!-- Q2 -->
        <div class="accordion-item bg-transparent border-0">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#q2">
                    How to update profile?
                </button>
            </h2>
            <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faq">
                <div class="accordion-body">
                    Go to Profile → Click Edit Profile → Update details → Save.
                </div>
            </div>
        </div>

        <!-- Q3 -->
        <div class="accordion-item bg-transparent border-0">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#q3">
                    How to track progress?
                </button>
            </h2>
            <div id="q3" class="accordion-collapse collapse" data-bs-parent="#faq">
                <div class="accordion-body">
                    Go to Progress page → View charts and stats.
                </div>
            </div>
        </div>

    </div>
</div>

<!-- CONTACT SUPPORT -->
<div class="card-box">
    <h5>Contact Support</h5>

    <form method="post "id="help" novalidate>
        <div class="mb-3">
            <label>Name</label>
            <input type="text"name="name"  class="form-control" placeholder="Enter your name">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email"name="email"  class="form-control" placeholder="Enter your email">
        </div>

        <div class="mb-3">
            <label>Message</label>
            <textarea name="message" class="form-control" rows="4" placeholder="Write your problem..."></textarea>
        </div>

        <button type="submit" class="btn button-btn-custom">Send Message</button>
    </form>
</div>

<!-- QUICK HELP -->
<div class="card-box">
    <h5>Quick Help</h5>

    <p>📞 Call: +91 9876543210</p>
    <p>📧 Email: support@fitlife.com</p>
    <p>⏰ Support Time: 9 AM - 6 PM</p>
</div>

</div>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
$(document).ready(function(){

$("#help").submit(function(e){

$(".error").remove();
$("input, select").removeClass("error-border");

let valid = true;

// NAME
let name = $("[name='name']").val().trim();

if(name == ""){
    $("[name='name']").after("<div class='error'>Please Enter Your Name</div>").addClass("error-border");
    valid = false;
}else if(!/^[A-Za-z ]+$/.test(name)){
    $("[name='name']").after("<div class='error'> Enter Only letters</div>").addClass("error-border");
    valid = false;
}

// EMAIL
let email = $("[name='email']").val().trim();
if(email == ""){
    $("[name='email']").after("<div class='error'>Please Enter Your Email</div>").addClass("error-border");
    valid = false;
} else if(!/^\S+@\S+\.\S+$/.test(email)){
    $("[name='email']").after("<div class='error'>Please Enter valid email</div>").addClass("error-border");
    valid = false;
}
let message = $("[name='message']").val().trim();

if(message == ""){
    $("[name='message']").after("<div class='error'>Please enter your message</div>").addClass("error-border");
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
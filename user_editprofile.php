<?php 
include 'user_sidebar.php';
include 'db_config.php';

$user_id = 1;

// FETCH DATA
$res = mysqli_query($conn, "SELECT * FROM user_profile WHERE user_id='$user_id'");
$data = mysqli_fetch_assoc($res);

// UPDATE PROFILE
if(isset($_POST['name'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $goal = $_POST['goal'];
    $activity = $_POST['activity'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $bmi = $_POST['bmi'];

    // IMAGE UPLOAD
    $img_name = $data['profile_img'];

    if(!empty($_FILES['profile_img']['name'])){
        $img_name = time() . "_" . $_FILES['profile_img']['name'];
        move_uploaded_file($_FILES['profile_img']['tmp_name'], "uploads/" . $img_name);
    }

    mysqli_query($conn, "UPDATE user_dashboard SET 
        name='$name',
        email='$email',
        phone='$phone',
        age='$age',
        height='$height',
        weight='$weight',
        goal='$goal',
        activity='$activity',
        city='$city',
        gender='$gender',
        bmi='$bmi',
        profile_img='$img_name'
        WHERE user_id='$user_id'
    ");

    header("Location: user_profile.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Profile</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/style.css" rel="stylesheet">
</head>

</script>

<body>

<input type="checkbox" id="toggle">

<div class="main-content">

<!-- PROFILE IMAGE -->
<div class="card-box profile-img-box" class="error" id="imgError">

<img src="uploads/<?php echo $data['profile_img'] ?? 'default.png'; ?>" id="preview" class="profile-img">
    <form method="post" enctype="multipart/form-data" class="mt-3">
        <input type="file" name="profile_img" class="form-control mb-2" onchange="previewImage(event)">
        <button class="btn profile-btn-blue">Change Photo</button>
    </form>

</div>

<!-- EDIT FORM -->
<div class="card-box">
    <h4>Edit Profile</h4>

    <form method="post" id="profileForm" novalidate>

        <div class="profile-grid">

            <div>
                <label>Name</label>
                <input type="text" name="name" value="<?php echo $data['name'] ?? ''; ?>" class="form-control">            
            </div>

            <div>
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $data['email'] ?? ''; ?>" class="form-control">
            </div>

            <div>
                <label>Phone</label>
                <input type="text" name="phone" value="<?php echo $data['phone'] ?? ''; ?>" class="form-control">

            </div>

            <div>
                <label>Age</label>
                <input type="text" name="age" value="<?php echo $data['age'] ?? ''; ?>" class="form-control">

            </div>

            <div>
                <label>Height (cm)</label>
                <input type="text" name="height" class="form-control" placeholder="Enter your Height">
            </div>

            <div>
                <label>Weight (kg)</label>
                <input type="text" name="weight" class="form-control" placeholder="Enter your weight">
            </div>

            <div>
                <label>Fitness Goal</label>
                <select class="form-control" name="goal">
                    <option>Weight Loss</option>
                    <option>Muscle Gain</option>
                    <option>Maintain</option>
                </select>
            </div>

            <div>
                <label>Activity Level</label>
                <select class="form-control" name="activity">
                    <option>Beginner</option>
                    <option>Intermediate</option>
                    <option>Advanced</option>
                </select>
            </div>

            <div>
                <label>City</label>
                <input type="text" name="city" class="form-control" placeholder="Enter your City">
            </div>

            <div>
                <label>Gender</label>
                <select class="form-control" name="gender">
                    <option>Female</option>
                    <option>Male</option>
                </select>
            </div>
             <div>
                <label>BMI</label>
                <input type="text" name="bmi" class="form-control" placeholder="Enter your bmi">
            </div>

        </div>

        <br>

        <button class="btn profile-btn-blue w-100">Save Changes</button>
        <br><br>
         <a href="user_changepassword.php" class="btn btn-danger w-100">
        Change Password
    </a>

    </form>
</div>

</div>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
$(document).ready(function(){

$("#profileForm").submit(function(e){

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

// PHONE
let phone = $("[name='phone']").val().trim();
if(phone == ""){
    $("[name='phone']").after("<div class='error'>Please Enter Your Phone Number</div>").addClass("error-border");
    valid = false;
} else if(!/^[0-9]{10}$/.test(phone)){
    $("[name='phone']").after("<div class='error'>Enter Only 10 Digits</div>").addClass("error-border");
    valid = false;
}

// AGE
let age = $("[name='age']").val().trim();
if(age == ""){
    $("[name='age']").after("<div class='error'>Please Enter Your Age</div>").addClass("error-border");
    valid = false;
} else if(!/^[0-9]+$/.test(age)){
    $("[name='age']").after("<div class='error'>Enter only Numbers </div>").addClass("error-border");
    valid = false;
}

// HEIGHT
let height = $("[name='height']").val().trim();
if(height == ""){
    $("[name='height']").after("<div class='error'>Please Enter Your Height</div>").addClass("error-border");
    valid = false;
} else if(!/^[0-9]+$/.test(height)){
    $("[name='height']").after("<div class='error'>Enter Only numbers </div>").addClass("error-border");
    valid = false;
}

// WEIGHT
let weight = $("[name='weight']").val().trim();
if(weight == ""){
    $("[name='weight']").after("<div class='error'>Enter Your Weight</div>").addClass("error-border");
    valid = false;
} else if(!/^[0-9]+$/.test(weight)){
    $("[name='weight']").after("<div class='error'>Enter Only numbers</div>").addClass("error-border");
    valid = false;
}

// GOAL
if($("[name='goal']").val() == ""){
    $("[name='goal']").after("<div class='error'>Select goal</div>").addClass("error-border");
    valid = false;
}

// ACTIVITY
if($("[name='activity']").val() == ""){
    $("[name='activity']").after("<div class='error'>Select activity</div>").addClass("error-border");
    valid = false;
}

// CITY
let city = $("[name='city']").val().trim();

if(city == ""){
    $("[name='city']").after("<div class='error'>Enter Your City</div>").addClass("error-border");
    valid = false;
}else if(!/^[A-Za-z ]+$/.test(city)){
    $("[name='city']").after("<div class='error'>Enter Only letters</div>").addClass("error-border");
    valid = false;
}
// GENDER
if($("[name='gender']").val() == ""){
    $("[name='gender']").after("<div class='error'>Select gender</div>").addClass("error-border");
    valid = false;
}
//bmi
let BMI = $("[name='bmi']").val().trim();
if(BMI == ""){
    $("[name='bmi']").after("<div class='error'>Please Enter Your BMI</div>").addClass("error-border");
    valid = false;
} else if(!/^[0-9]+$/.test(BMI)){
    $("[name='bmi']").after("<div class='error'>Enter Only numbers </div>").addClass("error-border");
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
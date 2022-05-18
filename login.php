<link href="assets/css/login.css" rel="stylesheet">
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<link rel="shortcut icon" href="assets/img/music.png" type="image/x-icon">

<?php
session_start();
?>
<div class="wrapper">
    <div class="logo"> <img src="assets/img/music.png" alt=""> </div>   
    <div class="text-center mt-4 name"> My Music</div>
    <form method="post" action="proses.php" class="p-3 mt-3">
        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> 
        <input type="text" name="username" id="username" aria-describedby="username" placeholder="Username"> </div>
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> 
        <input type="password" name="password" id="password" placeholder="Password"> </div> 
        <button class="btn mt-3" type="submit">Login</button>
           </form>
    <div class="text-center fs-6"> <a href="#">Forget password?</a> or <a href="#">Sign up</a> </div>
</div>


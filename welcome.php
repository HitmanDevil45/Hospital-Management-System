<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>

<body>

    <section class="banner">
        <header>
            <a href="home.html"><span>Hearty</span>Fy</a>
            <div class="menu">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="admin1.html">Dashboard</a></li>
              
                 
                </ul>
                <!-- <a href="login.php" class="btn">Log In</a> -->
                <a href="logout.php" class="btn"><?php echo "Welcome " . $_SESSION['username'] ?></a>
            </div>
        </header>
        <video src="video.mp4" muted loop autoplay></video>
        <!-- <div class="main">
            <div class="text">Welcome to</div>
            <div class="option">
                <li><span>HeartyFy</span></li>
            </div>
         -->
        <!-- </div> -->
        <ul class="handle">
            <li><a href="https://www.facebook.com/login"><i class='bx bxl-facebook' ></i></a></li>
            <li><a href="https://twitter.com/i/flow/login"><i class='bx bxl-twitter' ></i></a></li>
            <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a></li>
        </ul>
    </section>







































    <!-- js file links -->
    <script src="js/script.js"></script>
</body>

</html>



</body>

</html>
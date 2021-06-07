<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Weather</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css" />
</head>
<body>

        <nav>

        <div class="logo">
            <h4>Weather</h4>
        </div>

        <ul>
         <li><a href="home.php">Home</a></li>
         <li><a href="profile.php">Profile</a></li>
         <li><a href="about.php">About</a></li>
         <li><a href="logout.php">Logout</a></li>
        </ul>

        <div class="toggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
        </div>

    </nav>

    <div class="app-wrap">
        <div class="container">
            <div class="box-1">
                <img src="Trivi.jpeg" alt="Trivi" title="Trivi" border="3">
                <h1>Trivileoni Zefanya Tompunu</h1>
                <h1>19021106031</h1>
                <h1><a class="link" href="https://www.instagram.com/trivitompunu_/" target="blank"> @trivitompunu_ </a></h1>
            </div><br>
            <div class="box-2">
                <img src="Injil.jpeg" alt="Injil" title="Injil" border="3">
                <h1>Injili Tombey</h1>
                <h1>19021106028</h1>
                <h1><a class="link" href="https://www.instagram.com/injilitombey__/" target="blank"> @injilitombey_ </a></h1>
            </div><br>
            <div class="box-3">
                <img src="Brur.jpeg" alt="Tio" title="Tio" border="3">
                <h1>Tio Fransz</h1>
                <h1>19021106048</h1>
                <h1><a class="link" href="https://www.instagram.com/brur_e/" target="blank"> @brur_e </a></h1>
            </div><br><br>
        </div>
    </div>
    
    <footer>
        <p> Pemrograman Web C <script>document.write(new Date().getFullYear());</script></p>
</footer>

    <script src="my.js"></script>  
</body>
</html>

<?php
}else{
    header("Location: index.php?");
    exit();
}
?>
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
        <div class="search">
            <input type="text" autocomplete="off" class="search-box" placeholder="Search for a city..." />
        </div>
        <div class="city">-------</div>
        <div class="date">--------------------</div>
        <h2><span id="waktu">--:--:--</span></h2>
        <div class="temp">--<span>°c</span></div>
        <div class="weather">-----</div>
        <div class="hi-low">----------</div>
    </div></div><br>

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
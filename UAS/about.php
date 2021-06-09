<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Weather</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="about">
    <h3>Hello, <?php echo $_SESSION['name']; ?>... <br>
    Pada tugas akhir mata kuliah Pemrograman Web ini,
    kami Kelompok 3 Kelas C membuat project web Weather.
    Web Weather ini merupakan sebuah web yang berfungsi agar kita
    dapat mengetahui cuaca disuatu tempat berdasarkan pencarian
    dengan nama kota suata negara di seluruh dunia.
    </h3>
    </div>
    </div>

    <footer>
        <div class="footer-content">
        <h4>Weather</h4>
        <ul class="socials">
            <li><a href="https://www.unsrat.ac.id/" target="blank"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="https://www.instagram.com/unsrat1961/" target="blank"><i class="fa fa-instagram"></i></a></li>
        </ul>
        </div>
        <div class="footer-bottom">
            <p> Pemrograman Web C <script>document.write(new Date().getFullYear());</script></p>
        </div>
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

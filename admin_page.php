<?php
if (isset($_COOKIE['admin_access']) != "Frm38FALKVH#AAW") {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="#">Acceuil</a>
            <a href="#">Portfolio</a>
            <a href="#">Projets</a>
            <a href="#">Clips</a>
            <img src="./image/145207398.png">
        </div>
        <div class="select-game">
            <div class="profile-game">
                <a href="video.html"><img src="./image/r6.webp"></a>
            </div>
            <div class="profile-game">
                <a href=""><img src="./image/valorant.jpeg"></a>
            </div>
            <div class="profile-game">
                <a href=""><img src="./image/gtav.jpeg"></a>
            </div>
            <div class="profile-game">
                <a href=""><img src="./image/codcw.jpeg"></a>
            </div>
            <div class="profile-game">
                <a href=""><img src="./image/bodycam.jpeg"></a>
            </div>
            <div class="profile-game">
                <a href=""><img src="./image/xdefiant.jpeg"></a>
            </div>
            <div class="profile-game">
                <a href=""><img src="./image/desktop.jpg"></a>
            </div>
            <div class="profile-game">
                <a href=""><img src="./image/fortnite.jpeg"></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>

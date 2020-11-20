<?php
session_start();
if( !isset( $_SESSION['email']) ){
echo "You are not authorized to view this page. Go back <a href= '/'>home</a>";
exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>HOME</title>
</head>

<body>
    <div class="navigation">
        <div class="logo"><img src="../icon/olx1.png" alt="logo"></div>
        <div class="location">
            <input type="text" placeholder="Location">
            <button><img src="../icon/location.ico" alt="search"></button>
        </div>
        <div class="search">
            <input type="text" placeholder="Find Cars, Mobile Phones and more... ">
            <button type="submit"><img src="../icon/search.ico" alt="search"></button>
        </div>
        <a href="php/logout.php">Logout</a>
        <a href="#">Sell</a>
    </div>
    <script src="../javascript/app.js"></script>
</body>

</html>
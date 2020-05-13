<?php
include("includes/datalayer.php");
createDatabase();
$id = $_GET['id'];
$data = readsubject($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - Bowser</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>
<header><h1><?=$data['name']?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
        <? printf("<img class=\"avatar\" src=\"images/%s\">", $data["avatar"]);?>
            <div class="stats" style="background-color: <?=$data['color']?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?=$data['health']?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?=$data['attack']?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?=$data['defense']?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: <?=$data['weapon']?></li>
                    <li><b>Armor</b>: <?=$data['armor']?></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
                <?=$data['bio']?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<? include("includes/footer.php") ?>
</body>
</html>
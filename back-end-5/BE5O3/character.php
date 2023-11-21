<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - Bowser</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet"/>
</head>

<body>

    <?php
    if (isset($_GET['name'])) {
        $nameFromURL = $_GET['name'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "database_characters";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("SELECT * FROM characters WHERE LOWER(name) = :name");
            $stmt->bindParam(':name', $nameFromURL);
            $stmt->execute();

            $character = $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    } else {
        echo "No character found";
    }
    ?>


<header><h1><?php echo $character["name"] ?></h1>
    <a class="backbutton" href="javascript:history.back()"><i class="fas fa-long-arrow-alt-left"></i> Terug</a>
</header>

<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="images/<?php echo $character["avatar"] ?>">
            <div class="stats" style="background-color: yellowgreen">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $character["health"] ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $character["attack"] ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $character["defense"] ?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: <?php echo $character["weapon"] ?></li>
                    <li><b>Armor</b>: <?php echo $character["armor"] ?></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
            <?php echo $character["bio"] ?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<?php include "includes/footer.php" ?>
</body>
</html>
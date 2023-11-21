<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "database_characters";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->query("SELECT * FROM characters ORDER BY name");
            $characters = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo "Connection Failed: " . $e->getMessage();
        }
    ?>

<header>
    <h1>Alle <?php echo count($characters); ?> characters uit de database</h1>
</header>

<div id="container">

    <?php
    foreach ($characters as $character) {
        $name = $character["name"];
        $image = $character["avatar"];
        $hp = $character["health"];
        $at = $character["attack"];
        $df = $character["defense"];
        $url = 'character.php?name=';
        $encodedName = urlencode(strtolower($name));

        echo '<a class="item" href="' . $url . $encodedName .'">';
            echo '<div class="left">';
                echo '<img class="avatar" src="images/' . $image . '">';
            echo '</div>';
            echo '<div class="right">';
                echo '<h2>' . $name . '</h2>';
                echo '<div class="stats">';
                    echo '<ul class="fa-ul">';
                        echo '<li><span class="fa-li"><i class="fas fa-heart"></i></span> ' . $hp . '</li>';
                        echo '<li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> ' . $at . '</li>';
                        echo '<li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> ' . $df . '</li>';
                    echo '</ul>';
                echo '</div>';
            echo '</div>';
            echo '<div class="detailButton"><i class="fas fa-search"></i> bekijk</div>';
        echo '</a>';
    }?>
</div>

<?php include "includes/footer.php" ?>

</body>
</html>
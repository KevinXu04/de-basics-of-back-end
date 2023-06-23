<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    require "variables.php";

    echo $fullName;
    echo "<br>";
    foreach($fruits as $fruit){
        echo $fruit;
        echo "<br>";
    }

    ?>

</body>
</html>
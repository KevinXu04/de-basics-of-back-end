<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <style>
        img {
            width: 300px;
        }
    </style>

<body>
    
    <?php

    require "content.php";

    echo $fullName;
    echo "<br>";
    echo "<img src = '$image'>";
    echo "<br>";
    echo $text;

    ?>

</body>
</html>
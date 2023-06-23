<!-- jouw HTML voor een Header komt hier... 
Gebruik hier tenminste een header afbeelding en een menu
Zorg dat je in het menu bij elk item een url parameter zet
om te bepalen welke inhoud er ingeladen moet worden in je html
-->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="header">
        <div class="navbar">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?subject=1">Minecraft</a></li>
                    <li><a href="index.php?subject=2">FIFA</a></li>
                    <li><a href="index.php?subject=3">Fortnite</a></li>
                    <li><a href="index.php?subject=4">Assassin's Creed</a></li>
                </ul>
            </nav>
        </div>
    </div>
</body>
</html>
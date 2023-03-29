<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    function check($data){
        $data = trim($data); // Verwijdert onnodige tekens (extra spatie, tab, nieuwe regel)
        $data = stripslashes($data); // Verwijdert backslashes (\) uit de invoergegevens van de gebruiker
        $data = htmlspecialchars($data); // Het verandert speciale characters naar HTML elementen

        return $data;
    }

    $huisdier = $persoon = $land = $verveel = $speelgoed = $spijbel = $kopen = $bezigheid = "";
    $huisdierError = $persoonError = $landError = $verveelError = $speelgoedError = $spijbelError = $kopenError = $bezigheidError = "";
    $formSucces = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["vraag"])){
            $vraagError = "Deze veld is verplicht";
        } else{
            $vraag = check($_POST["vraag"]);
        }

    }

    if (!$formSucces){
        ?>
        <div class="container">

            <header>
                <nav>
                    <ul>
                        <li><a href="paniek.php" id="test">Er heerst paniek...</a></li>
                        <li><a href="onkunde.php" id="test">Onkunde</a></li>
                    </ul>
                </nav>
            </header>

            <div class="text">
                <h1>Er heerst paniek</h1>

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    Welk dier zou je nooit als huisdier willen hebben?* <input type="text" name="huisdier"><br><br>
                    <span> <?php echo $vraagError;?></span>
                    Wie is de belangrijkste persoon in je leven?* <input type="text" name="persoon"><br><br>
                    <span> <?php echo $vraagError;?></span>
                    In welk land zou je graag willen wonen?* <input type="text" name="land"><br><br>
                    <span> <?php echo $vraagError;?></span>
                    Wat doe je als je je verveelt?* <input type="text" name="verveel"><br><br>
                    <span> <?php echo $vraagError;?></span>
                    Met welk speelgoed speelde je als kind het meest?* <input type="text" name="speelgoed"><br><br>
                    <span> <?php echo $vraagError;?></span>
                    Bij welk docent spijbel je het liefst?* <input type="text" name="spijbel"><br><br>
                    <span> <?php echo $vraagError;?></span>
                    Als je € 100.000,- had, wat zou je dan kopen?* <input type="text" name="kopen"><br><br>
                    <span> <?php echo $vraagError;?></span>
                    Wat is je favoriete bezigheid?* <input type="text" name="bezigheid"><br><br>
                    <span> <?php echo $vraagError;?></span>
                    <input type="submit" name="submit" value="Versturen"><br><br>
                </form>
            </div>

            <footer>
                <div class="copyright">
                    <p>Copyright &copy;2023 Kevin Xiu</p>
                </div>
            </footer>
        </div>
        <?php
        }
    ?>

</body>
</html>
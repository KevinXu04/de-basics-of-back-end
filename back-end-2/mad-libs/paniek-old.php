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




        // if (empty($_POST["huisdier"])){
        //     $huisdierError = "Deze veld is verplicht";
        // } else{
        //     $huisdier = check($_POST["huisdier"]);
        // } 
        // if (empty($_POST["persoon"])){
        //     $persoonError = "Deze veld is verplicht";
        // } else{
        //     $persoon = check($_POST["persoon"]);
        // } 
        // if (empty($_POST["land"])){
        //     $landError = "Deze veld is verplicht";
        // } else{
        //     $land = check($_POST["land"]);
        // } 
        // if (empty($_POST["verveel"])){
        //     $verveelError = "Deze veld is verplicht";
        // } else{
        //     $verveel = check($_POST["verveel"]);
        // } 
        // if (empty($_POST["speelgoed"])){
        //     $speelgoedError = "Deze veld is verplicht";
        // } else{
        //     $speelgoed = check($_POST["speelgoed"]);
        // } 
        // if (empty($_POST["spijbel"])){
        //     $spijbelError = "Deze veld is verplicht";
        // } else{
        //     $spijbel = check($_POST["spijbel"]);
        // } 
        // if (empty($_POST["kopen"])){
        //     $kopenError = "Deze veld is verplicht";
        // } else{
        //     $kopen = check($_POST["kopen"]);
        // } 
        // if (empty($_POST["bezigheid"])){
        //     $bezigheidError = "Deze veld is verplicht";
        // } else{
        //     $bezigheid = check($_POST["bezigheid"]);
        // } 

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
                    Welk dier zou je nooit als huisdier willen hebben?* <input type="text" name="huisdier" value="<?php echo $huisdier;?>">
                    <?php echo "<span style='color:red;'>", $huisdierError, "</span>";?><br><br>

                    Wie is de belangrijkste persoon in je leven?* <input type="text" name="persoon" value="<?php echo $persoon;?>">
                    <?php echo "<span style='color:red;'>", $persoonError, "</span>";?><br><br>

                    In welk land zou je graag willen wonen?* <input type="text" name="land" value="<?php echo $land;?>">
                    <?php echo "<span style='color:red;'>", $landError, "</span>";?><br><br>

                    Wat doe je als je je verveelt?* <input type="text" name="verveel" value="<?php echo $verveel;?>">
                    <?php echo "<span style='color:red;'>", $verveelError, "</span>";?><br><br>

                    Met welk speelgoed speelde je als kind het meest?* <input type="text" name="speelgoed" value="<?php echo $speelgoed;?>">
                    <?php echo "<span style='color:red;'>", $speelgoedError, "</span>";?><br><br>

                    Bij welk docent spijbel je het liefst?* <input type="text" name="spijbel" value="<?php echo $spijbel;?>">
                    <?php echo "<span style='color:red;'>", $spijbelError, "</span>";?><br><br>

                    Als je € 100.000,- had, wat zou je dan kopen?* <input type="text" name="kopen" value="<?php echo $kopen;?>">
                    <?php echo "<span style='color:red;'>", $kopenError, "</span>";?><br><br>

                    Wat is je favoriete bezigheid?* <input type="text" name="bezigheid" value="<?php echo $bezigheid;?>">
                    <?php echo "<span style='color:red;'>", $bezigheidError, "</span>";?><br><br>

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
    } else{
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

                <p>Er heerst paniek in het koninkrijk Gallifrey, Koning <?php echo $spijbel;?> is ten einde raad en als koning <?php echo $spijbel;?> ten einde raad is, dan roept hij zijn ten-raadsheer <?php echo $persoon;?>.</p>

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
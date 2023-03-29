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

    $kunnen = $persoon = $getal = $vakantie = $beste = $slechtste = $overkomen = "";
    $kunnenError = $persoonError = $getalError = $vakantieError = $besteError = $slechtsteError = $overkomenError = "";
    $formSucces = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["kunnen"])){
            $kunnenError = "Deze veld is verplicht";
        } else{
            $kunnen = check($_POST["kunnen"]);
        } 
        if (empty($_POST["persoon"])){
            $persoonError = "Deze veld is verplicht";
        } else{
            $persoon = check($_POST["persoon"]);
        } 
        if (empty($_POST["getal"])){
            $getalError = "Deze veld is verplicht";
        } else{
            $getal = check($_POST["getal"]);
        } 
        if (empty($_POST["vakantie"])){
            $vakantieError = "Deze veld is verplicht";
        } else{
            $vakantie = check($_POST["vakantie"]);
        } 
        if (empty($_POST["beste"])){
            $besteError = "Deze veld is verplicht";
        } else{
            $beste = check($_POST["beste"]);
        } 
        if (empty($_POST["slechtste"])){
            $slechtsteError = "Deze veld is verplicht";
        } else{
            $slechtste = check($_POST["slechtste"]);
        } 
        if (empty($_POST["overkomen"])){
            $overkomenError = "Deze veld is verplicht";
        } else{
            $overkomen = check($_POST["overkomen"]);
        } 

        if ($kunnenError == "" and $persoonError == "" and $getalError == "" and $vakantieError == "" and $besteError == "" and $slechtsteError == "" and $overkomenError == ""){
            $formSucces = true;
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

                    Wat zou je graag willen kunnen?* <input type="text" name="kunnen" value="<?php echo $kunnen;?>">
                    <?php echo "<span style='color:red;'>", $kunnenError, "</span>";?><br><br>

                    Met welke persoon kun je goed opschieten?* <input type="text" name="persoon" value="<?php echo $persoon;?>">
                    <?php echo "<span style='color:red;'>", $persoonError, "</span>";?><br><br>

                    Wat is je favoriete getal?* <input type="text" name="getal" value="<?php echo $getal;?>">
                    <?php echo "<span style='color:red;'>", $getalError, "</span>";?><br><br>

                    Wat heb je altijd bij je als je op vakantie gaat?* <input type="text" name="vakantie" value="<?php echo $vakantie;?>">
                    <?php echo "<span style='color:red;'>", $vakantieError, "</span>";?><br><br>

                    Wat is je beste persoonlijke eigenschap* <input type="text" name="beste" value="<?php echo $beste;?>">
                    <?php echo "<span style='color:red;'>", $besteError, "</span>";?><br><br>

                    Wat is je slechtste persoonlijke eigenschap* <input type="text" name="slechtste" value="<?php echo $slechtste;?>">
                    <?php echo "<span style='color:red;'>", $slechtsteError, "</span>";?><br><br>

                    Wat is het ergste dat je kan overkomen* <input type="text" name="overkomen" value="<?php echo $overkomen;?>">
                    <?php echo "<span style='color:red;'>", $overkomenError, "</span>";?><br><br>

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
                <h1>Onkunde</h1>

                <p>Er zijn veel mensen die niet kunnen <?php echo $kunnen; ?>. Neem nou <?php echo $persoon; ?>. Zelfs met de hulp van een <?php echo $vakantie; ?> of zelfs <?php echo $getal; ?> kan <?php echo $persoon; ?> niet <?php echo $kunnen; ?>. Dat heeft niet te maken met een gebrek aan <?php echo $beste; ?>, maar met een te veel aan <?php echo $slechtste; ?> Te veel <?php echo $slechtste; ?> leidt tot <?php echo $overkomen; ?> en dat is niet goed als je wilt <?php echo $kunnen; ?>. Helaas voor <?php echo $persoon; ?>.</p>

                
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
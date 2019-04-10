<!DOCTYPE HTML>
<html>
<head>
    <title>Quiz Scherm</title>
    <link rel="stylesheet" type="text/css" href="QuizSchermCSS.css">
    <script src="QuizSchermJS.js"></script>
    <?php
    $strSQL="select vraag, vraagnummer, image_1, image_2, image_3, image_4, punten, antwoord ".
        "from tbvragen as v ".
        "inner join tbpunten as p ".
        "on v.id_ptn = p.id_ptn ".
        "inner join tbantwoorden as a ".
        "on v.id_antw=a.id_antw ";

    $rs = mysql_query($strSQL, $db);

    // check to see if they submitted their quiz
    if(isset($_POST['verstuur'])){
// a variable for total points
        $totaalpunten = 0;
        while ($r = mysql_fetch_array($rs))
        {
            // give the question number
            echo "Vraag ".$r["vraagnummer"]." - ";
            // check if their reply is the same as the correct answer
            if ($_POST["antwoord".$r["vraagnummer"]]==$r["antwoord"]) {
                // echo the points they got for this question
                echo $r["punten"]." punten<br />";
                // add the points to the total points
                $totaalpunten += $r["punten"];
            }
            else {
                // if wrong show 0 points
                echo "0 puntens<br />";
            }
            // give their total score
            echo "je hebt ".$totaalpunten." punten";

        }}

    // if the quiz was not submitted, show the quiz
    else { ?>
        <form name="quiz" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            <?php
            while ($r = mysql_fetch_array($rs))
            { ?>
                <fieldset>
                    <h3>Vraag <?php echo($r["vraagnummer"]);?>  <?php echo($r["vraag"]);?><span>(<?echo($r["punten"]); ?> punten)</span></h3>
                    <ul>
                        <li><img src="images/<?echo($r["image_1"]); ?>"  /><input type="radio" name="antwoord<?php echo($r["vraagnummer"]);?>" value="A" /><label>A</label></li>
                        <li><img src="images/<?echo($r["image_2"]); ?>" /><input type="radio" name="antwoord<?php echo($r["vraagnummer"]);?>" value="B" /><label>B</label></li>
                        <li><img src="images/<?echo($r["image_3"]); ?>" /><input type="radio" name="antwoord<?php echo($r["vraagnummer"]);?>" value="C"/><label>C</label></li>
                        <li><img src="images/<?echo($r["image_4"]); ?>" /><input type="radio" name="antwoord<?php echo($r["vraagnummer"]);?>" value="D" /><label>D</label></li>
                    </ul>
                </fieldset>
            <?php  }    ?>
            <input type="submit" class="button" value="verstuur je antwoorden" name="verstuur" />
        </form>
        <?php
    }
    mysql_free_result($rs);
    mysql_close($db);
    ?>
</head>

<body>

<container class="Hele_Pagina">
    <header class="header">
        <div class="infoDiv">
            <div class="grid-container1">
                <div class="puntenDiv">

                    <p class="pClass">$punten</p>
                </div>
                <div class="usernameDiv">
                    <p>$username</p>
                </div>
                <div class="countdownClass">
                    <p id="countdown"></p>
                </div>
            </div>
        </div>
    </header>

    <content class="content">
        <div class="contentDiv">
            <div id="rcornersContent" class="vraagDiv">
                <h2>Hier komen de vragen van de div. </h2>
            </div>
        </div>
    </content>
    <footer class="footer">

        <div class="grid-container2">
            <div class="grid-item">Antwoord A</div>
            <div class="grid-item">Antwoord B</div>
            <div class="grid-item">Antwoord C</div>
            <div class="grid-item">Antwoord D</div>
        </div>


    </footer>
</container>
</body>
</html>


<!DOCTYPE HTML>
<html>
<head>
    <title>Quiz Scherm</title>
    <link rel="stylesheet" type="text/css" href="QuizSchermCSS.css">
    <script src="QuizSchermJS.js"></script>
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kahboom";
$antwoord ="";

include_once 'DataBase_Functies.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


?>
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
                 <?php echo "<h2>" . getVraag()['vraag']. "? </h2>";
                ?>

            </div>
        </div>
    </content>
    <footer class="footer">
        <div class="grid-container2">
            <button onclick="getVraag2()" class="grid-item"><?php echo "<h2>" . getAntwoord1()['antwoord'] . "</h2>"?></button>
            <button onclick="getAtnwoord2()" class="grid-item"><?php echo "<h2>" . getAntwoord2()['antwoord'] . "</h2>"?></button>
            <button onclick="getAtnwoord3()" class="grid-item"><?php echo "<h2>" . getAntwoord3()['antwoord'] . "</h2>"?></button>
            <button onclick="getAtnwoord4()" class="grid-item"><?php echo "<h2>" . getAntwoord4()['antwoord'] . "</h2>"?></button>
        </div>


    </footer>
</container>
</body>
</html>

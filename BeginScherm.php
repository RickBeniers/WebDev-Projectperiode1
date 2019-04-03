<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="BeginSchermOpmaak.css">
        <script src="Scripts.js" type="javascript"></script> 
        <?php
            include_once"DataBase_fnc_InsertInto.php";
        ?>
        
    </head>
    <body id="beginScherm">
        
        <div id="Header"> 
            <h3 id="Datum"></h3>
                <div id="headerDiv">
                    <h3 id="adminNaam">gebruikers naam</h3>
                    <h3 id="Timer">Quiz timer</h3>
                </div>
            <h5> this is the header with all general information </h5>
        </div>
        
        <div id="StartScreen"> 
            
            <div id="playerCount"> 
                <h5> this is the player count Tab, all current players are listed here and new players can be add as well as removed.</h5>
                
                
                <div id="addPlayerField">
                    <form>
                        <input type="email" placeholder="fill in email" name="Emailname"><button id="addPlayer" onclick="addPlayer()">Invite player</button><br>
                    </form>
                    <?php
                        $bericht = ($_POST["Emailname"]);
                        InsertEmailIntoDataBase($bericht);
                    ?>
                </div>
                <h3 id="player01">-placeholder- player01</h3>
            </div>
            <div id="QuizCreationScreen"> 
                <h5>this is the quiz question creation screen, from here questions for the quiz can be created after a quiz has been created. </h5>
                <form>
                    <input id="QCSname" type="text" placeholder="formulate a Question here" name="QN"><br>
                    <input id="QCS1" type="text" placeholder="Answer 1" name="A1"><input class="checkboxInfo" id="checkboxA1" type="checkbox"><br>
                    <input id="QCS2" type="text" placeholder="Answer 2" name="A2"><input class="checkboxInfo" id="checkboxA2" type="checkbox"><br>
                    <input id="QCS3" type="text" placeholder="Answer 3" name="A3"><input class="checkboxInfo" id="checkboxA3" type="checkbox"><br>
                    <input id="QCS4" type="text" placeholder="Answer 4" name="A4"><input class="checkboxInfo" id="checkboxA4" type="checkbox"><br>
                    
                    <div id="buttonDiv">
                        <button class="QuestionButton">terug</button>
                        <button class="QuestionButton">create</button>
                        <button class="QuestionButton">vooruit</button>
                    </div>
                </form>
            </div>
            <div id="QuizQuestionCreationScreen"> 
                <h5>this is the Quiz Creation Screen, a quiz can be created from here.</h5>
                <form>
                    <input id="QN" type="text" placeholder="Quiz name" name="QN"><br>
                    <input id="QA" type="number" placeholder="how many questions" name="QA"><br>
                    <input id="AA" type="number" placeholder="how many answers" name="AA"><br>
                    <input id="TA" type="number" placeholder="Timer amount" name="TA"><br>
                    <button id="addPlayer02" onclick="addPlayer()">Create</button><br>
                </form>
                <h4 id="vragenlijst">lijst met vragen</h4>
                <h4 id="antwoordenlijst">lijst met antwoorden</h4>
            </div>
            
        </div>
        <script>
            window.onload = setInterval(clock,1000);
            function clock()
            {
                
                var d = new Date();
                var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
                
                document.getElementById("Datum").innerHTML = days[d.getDay()] + " " + d.getDate() + " " + months[d.getMonth()] + " " + d.getFullYear() + " " + "0" + d.getHours() + ":" + d.getMinutes() + " " + d.getSeconds();
        
            }
        </script>
    </body>
</html>

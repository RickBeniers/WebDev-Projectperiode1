<html>
    <head>
        <title>databaseInsertInto</title>
        <?php
            include_once"DataBase_fnc_connect.php";
        ?>
    </head>
    <body>

        <?php 
                
            function InsertEmailIntoDataBase($bericht)
            {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "kahboom";

                $conn = mysqli_connect($servername, $username, $password, $dbname);
                
                if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }  
        
                $berichtA = mysqli_real_escape_string($conn,($bericht));
                $berichtB = htmlspecialchars($berichtA);  // gebruikers email.
                
                $sql = "INSERT INTO gebruiker(Email) values('$berichtB')"; 
                
                if (mysqli_multi_query($conn, $sql)) {
                    echo "invite send";
                }else{ 
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                      }
                        $conn->close();
            }
            function InsertQuestionIntoDatabase($bericht02, $bericht03, $bericht04, $bericht05, $bericht06, $checkbox)
            {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "kahboom";
                
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                
                if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            } 
                $berichtA = mysqli_real_escape_string($conn,($bericht02));  
                $berichtA1 = mysqli_real_escape_string($conn,($bericht03));   
                $berichtA2 = mysqli_real_escape_string($conn,($bericht04)); 
                $berichtA3 = mysqli_real_escape_string($conn,($bericht05)); 
                $berichtA4 = mysqli_real_escape_string($conn,($bericht06)); 
                $berichtB = htmlspecialchars($berichtA);    // vraag naam   
                $berichtB1 = htmlspecialchars($berichtA1);  // antwoord op vraag1
                $berichtB2 = htmlspecialchars($berichtA2);  // antwoord op vraag2
                $berichtB3 = htmlspecialchars($berichtA3);  // antwoord op vraag3
                $berichtB4 = htmlspecialchars($berichtA4);  // antwoord op vraag4
                
                $sql = "INSERT INTO vragen(vraag) values('$berichtB')"; 
                $sql2 = "INSERT INTO antwoorden(antwoord) values('$berichtB1')"; 
                $sql3 = "INSERT INTO antwoorden(antwoord) values('$berichtB2')"; 
                $sql4 = "INSERT INTO antwoorden(antwoord) values('$berichtB3')"; 
                $sql5 = "INSERT INTO antwoorden(antwoord) values('$berichtB4')"; 
                
                if (mysqli_multi_query($conn, $sql)) {
                    echo "new Question and answers created";
                }else{ 
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                      }
                if (mysqli_multi_query($conn, $sql2)) {
                    echo "new Question and answers created";
                }else{ 
                        echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
                      }
                if (mysqli_multi_query($conn, $sql3)) {
                    echo "new Question and answers created";
                }else{ 
                        echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
                      }
                if (mysqli_multi_query($conn, $sql4)) {
                    echo "new Question and answers created";
                }else{ 
                        echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
                      }
                if (mysqli_multi_query($conn, $sql5)) {
                    echo "new Question and answers created";
                }else{ 
                        echo "Error: " . $sql5 . "<br>" . mysqli_error($conn);
                      }
                        $conn->close();
            }
            function InsertQuizInfoIntoDatabase($QuizNameInput, $AmountAllowedQuestions, $AmountAllowedAnswers, $AmountQuizTimer)
            {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "kahboom";
                
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                
                if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            } 
                $berichtA = mysqli_real_escape_string($conn,($QuizNameInput));  
                $berichtA1 = mysqli_real_escape_string($conn,($AmountAllowedQuestions)); 
                $berichtA2 = mysqli_real_escape_string($conn,($AmountAllowedAnswers)); 
                $berichtA3 = mysqli_real_escape_string($conn,($AmountQuizTimer)); 
                $berichtB = htmlspecialchars($berichtA);    // de naam van de quiz. 
                $berichtB1 = htmlspecialchars($berichtA1);    // aantal vragen toegestaan.
                $berichtB2 = htmlspecialchars($berichtA2);    // aantal antwoorden toegestaan.
                $berichtB3 = htmlspecialchars($berichtA3);    // aantal seconden voor de quiz Timer.
                
                $sql = "INSERT INTO quiz(Naam, aantalVragen, aantalAntwoorden, quizTimer) values('$berichtB', '$berichtB1', '$berichtB2', '$berichtB3')"; 
                
                if (mysqli_multi_query($conn, $sql)) {
                    echo "new Data created";
                }else{ 
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                      }
                $conn->close();
            }
        ?>
            
    </body>
</html>
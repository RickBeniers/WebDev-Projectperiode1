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
                $berichtB = htmlspecialchars($berichtA);  
                
                $sql = "INSERT INTO gebruiker(Email) values('$berichtB')"; 
                
                if (mysqli_multi_query($conn, $sql)) {
                    echo "invite send";
                }else{ 
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                      }
                        $conn->close();
            }
            function InsertQuestionIntoDatabase($bericht02, $bericht03, $bericht04, $bericht05, $bericht06)
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
                $berichtB1 = htmlspecialchars($berichtA1);  // antwoord op vraag
                $berichtB2 = htmlspecialchars($berichtA2);  // antwoord op vraag
                $berichtB3 = htmlspecialchars($berichtA3);  // antwoord op vraag
                $berichtB4 = htmlspecialchars($berichtA4);  // antwoord op vraag
                
                $sql = "INSERT INTO vragen(vraag) values('$berichtB')"; 
                $sql = "INSERT INTO vragen(vraag) values('$berichtB1')"; 
                $sql = "INSERT INTO vragen(vraag) values('$berichtB2')"; 
                $sql = "INSERT INTO vragen(vraag) values('$berichtB3')"; 
                $sql = "INSERT INTO vragen(vraag) values('$berichtB4')"; 
                
                if (mysqli_multi_query($conn, $sql)) {
                    echo "new Question and answers created";
                }else{ 
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                      }
                        $conn->close();
            }
        ?>
            
    </body>
</html>
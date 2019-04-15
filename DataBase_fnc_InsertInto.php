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
        
                $bericht = mysqli_real_escape_string($conn,($bericht));
                $bericht = htmlspecialchars($bericht);  
                $sql = "INSERT INTO gebruiker(Email) values('$bericht')";
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
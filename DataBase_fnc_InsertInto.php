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
                $sql = "INSERT INTO gebruiker(E-mail) values('beniersrick@gmail.com')"; 
            }
        ?>
            
    </body>
</html>
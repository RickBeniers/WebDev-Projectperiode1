<html>
    <head>
        <title>databaseInsertInto</title>
        <?php
            include_once"DataBase_fnc_connect.php";
        ?>
    </head>
    <body>

        <?php 
                
            function InsertEmailIntoDataBase($emailbericht)
            {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "kahboom";

                $conn = mysqli_connect($servername, $username, $password, $dbname);
                
                if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }  
        
                $emailbericht = mysqli_real_escape_string($conn,($emailbericht));
                $emailbericht = htmlspecialchars($bericht);  
                $sql = "INSERT INTO gebruiker(E-mail) values('beniersrick@gmail.com')"; 
            }
        ?>
            
    </body>
</html>
<html>
    <head>
        <title>databaseInsertInto</title>
        <?php
            include_once"DataBase_fnc_connect.php";
        ?>
    </head>
    <body>

        <?php 
            function InsertEmailIntoDataBase()
            {
                connect();
        
                $bericht = mysqli_real_escape_string($conn,($bericht));
                $bericht = htmlspecialchars($bericht);  
                $sql = "INSERT INTO gebruiker(E-mail) values('$bericht')"; 
            }
        ?>
            
    </body>
</html>
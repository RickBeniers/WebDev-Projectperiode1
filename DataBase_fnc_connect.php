<html>
<head>
<title>databaseConnect</title>

</head>
<body>

<?php 
        
                
                    
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "kahboom";

                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                
                    if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }  
                
?>
            
</body>
</html>
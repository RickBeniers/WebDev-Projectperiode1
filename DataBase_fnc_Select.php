<html>
<head>
<title>A-tag</title>

</head>
<body>

<?php 
        
                function DataSelectVragen()
                {
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "kahboom";

                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    
                    if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                                }  
                    //echo " <br><br>hier komen de antwoorden en vragen uit de database ";
                    
                    $sql = "SELECT vraag FROM vragen";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) 
                    {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) 
                        {
                            echo $row["vraag"] . "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                        mysqli_close($conn);
                }
                function DataSelectAntwoord()
                {
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "kahboom";

                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                
                    if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error());
                                } 
                    
                    $sql = "SELECT antwoord FROM antwoorden";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) 
                    {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) 
                        {
                            echo $row["antwoord"] . "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                        mysqli_close($conn);
                }
         
?>
            
</body>
</html>
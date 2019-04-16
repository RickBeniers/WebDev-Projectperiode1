<?php

function getVraag() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kahboom";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT vraag FROM `vragen` WHERE `vraag-ID`= 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "Vraag: " . $row["vraag"];
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}
function getVraag2() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kahboom";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SvraELECT vraag FROM `vragen` WHERE `ag-ID`= 2";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "Vraag: " . $row["vraag"];
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}

function getAntwoord1() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kahboom";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT antwoord FROM `antwoorden` WHERE `antwoord-id` = 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo " " . $row["antwoord"];
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}
function getAntwoord2() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kahboom";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT antwoord FROM `antwoorden` WHERE `antwoord-id` = 2";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo " " . $row["antwoord"];
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}
function getAntwoord3() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kahboom";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT antwoord FROM `antwoorden` WHERE `antwoord-id` = 3";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo " " . $row["antwoord"];
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}
function getAntwoord4() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kahboom";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT antwoord FROM `antwoorden` WHERE `antwoord-id` = 4";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo " " . $row["antwoord"];
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}
        ?>
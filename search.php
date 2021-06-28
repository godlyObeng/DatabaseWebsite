<?php
    //connection code to my sql attributes
    $titlesearch = $_GET['mvTitle'];
    $actorsearch = $_GET['actName']

    $host = "mysql.cs.nott.ac.uk";
    $username = "psygo1";
    $password = "LaoObeng12";
    $db_name = "psygo1";

    //connection command
    $conn = new mysqli($host, $username, $password, $db_name);

    //error checking if connection successful
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";

    $sql = "SELECT mvID, mvTitle, mvPrice, mvYear, mvGenre FROM movie WHERE mvTitle = '$titlesearch'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->bind_result($mvID, $mvTitle, $mvPrice, $mvPrice, $mvGenre);

    $sql = "SELECT actName, actID FROM actor WHERE actName = '$actorsearch'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->bind_result($actName, $actID);
?>
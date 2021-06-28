<?php
    //connection code to my sql attributes
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

    //add a record to the movie table
    $mvID = $_POST['mvID'];
    $actID = $_POST['actID'];
    $mvTitle = $_POST['mvTitle'];
    $mvPrice = $_POST['mvPrice'];
    $mvYear = $_POST['mvYear'];
    $mvGenre = $_POST['mvGenre'];
    $mvScenes = $_POST['mvScenes'];

    $sql = "INSERT INTO Movie (mvID, actID, mvTitle, mvPrice, mvYear, mvGenre, mvScenes)
    VALUES ('$mvID', '$actID', '$mvTitle', '$mvPrice', '$mvYear', '$mvGenre', '$mvScenes')";
    if($conn->query($sql) == TRUE)
    {
        echo "New record created successfully";
    }
    
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
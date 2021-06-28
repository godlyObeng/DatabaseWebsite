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

    //add a record to the actor table
    $actID = $_POST['actID'];
    $actName = $_POST['actName'];

    $sql = "INSERT INTO Actor (actID, actName) VALUES ('$actID', '$actName')";
    if($conn->query($sql) == TRUE)
    {
        echo "New record created successfully";
    }
    
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
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

    //delete a record from the actor table
    $actID = $_POST['actID'];
    $sql = "DELETE FROM Actor WHERE actID = $actID";
    if($conn->query($sql) == TRUE)
    {
        echo "Record deleted successfully";
    }
    
    else
    {
        echo "Error deleting record: " . $conn->error;
    }
?>
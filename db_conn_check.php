<?php
    // VM Server
    //$servername = '10.0.245.18';
    //$username = 'admin';
    //$password = 'password';

    $servername = 'localhost';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    
?>
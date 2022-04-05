<?php
    $domain = "localhost/url/URL-Shortener/"; //like this: domain.com/
    $host = "localhost";
    $user = "root"; //Database username
    $pass = ""; //Database password
    $db = "urlShortener"; //Database name

    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        echo "Database connection error".mysqli_connect_error();
    }
?>
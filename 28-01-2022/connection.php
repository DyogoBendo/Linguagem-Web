<?php
    include_once 'db.php';
    function OpenCon()
     {
     $dbhost = $_ENV["dbhost"];
     $dbuser = $_ENV["dbuser"];
     $dbpass = $_ENV["dbpass"];
     $db = $_ENV["db"];
     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
     
     return $conn;
     }
     
    function CloseCon($conn)
     {
     $conn -> close();
     }
       
?>
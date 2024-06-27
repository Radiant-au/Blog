<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=blog", "root", "");
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
// Close connection
// unset($pdo);
?>
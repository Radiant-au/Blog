<?php

    require_once("config.php");
    $category = $_POST['category'];

    $sql = "Insert into category(name) values (?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1 , $category , PDO::PARAM_STR);
    $stmt->execute();

    echo "success";
    header("Location:../category/list.php");
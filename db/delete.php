<?php

    require_once("config.php");
    $id = $_GET['id'];

    $sql = "Delete from category where id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1 , $id , PDO::PARAM_INT);
    $stmt->execute();

    echo "success";
    header("Location:../category/list.php");
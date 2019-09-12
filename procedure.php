<?php

    require("DbConnect.php");
    $db = new DbConnect;
    $conn = $db -> connect();
    $sql = "CALL 'getusers'();";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $authors = $stmt -> fetchAll(PDO::FETCH_ASSOC);

    print_r($authors); exit;
?>
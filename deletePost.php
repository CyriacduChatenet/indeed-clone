<?php 
    require_once './services/dbConfig.php';
    $req = $db -> prepare('DELETE FROM advert WHERE id = :id');
    $req->bindParam(":id", $_GET['id']);
    $req -> execute();
    header('Location: index.php');
?>
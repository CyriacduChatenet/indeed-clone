<?php

require_once('./services/dbConfig.php');

$req = $db->prepare('INSERT INTO advert (title, companyName, adress, city, postalCode, contractType, email, salary, content, contractDate) VALUES (:title, :companyName, :adress, :city, :postalCode, :contractType, :email, :salary, :content, :contractDate)');
$req ->bindParam(":title", $_POST['title']);
$req ->bindParam(":companyName", $_POST['companyName']);
$req ->bindParam(":adress", $_POST['adress']);
$req ->bindParam(":city", $_POST['city']);
$req ->bindParam(":postalCode", $_POST['postalCode']);
$req ->bindParam(":contractType", $_POST['contractType']);
$req ->bindParam(":email", $_POST['email']);
$req ->bindParam(":salary", $_POST['salary']);
$req ->bindParam(":content", $_POST['content']);
$req ->bindParam(":contractDate", $_POST['contractDate']);
$req ->execute();

header('Location: index.php');
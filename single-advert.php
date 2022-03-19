<?php
require_once('./components/header.php');
require_once('./services/dbConfig.php');

$req = $db->prepare('SELECT * FROM advert WHERE id = :id');
$req->bindParam(":id", $_GET['id']);
$req->execute();

$advert = $req->fetch(PDO::FETCH_ASSOC);
?>

<div class="container">
    <h1>
        <?php echo $advert['title']; ?>
    </h1>
    <p>
        <?php echo $advert['companyName']; ?>
    </p>
    <p>
        <?php echo $advert['contractType']; ?>
    </p>
    <p>
        <?php echo $advert['adress']; ?> <?php echo $advert['postalCode']; ?> <?php echo $advert['city']; ?>
    </p>
    <p>
        <strong><?php echo $advert['salary']; ?>€/mois</strong>
    </p>
    <p>
        <?php echo $advert['content']; ?>
    </p>

    <h2>Contactez-nous</h2>
    <p><?php echo $advert['email'] ?></p>
    <br>
    <p><?php echo $advert['contractDate'] ?></p>
</div>
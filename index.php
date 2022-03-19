<?php require_once('./components/header.php') ?>
<div class="container">
    <div class="row">
        <?php
        require_once('./services/dbConfig.php');
        $req = $db->prepare("SELECT * FROM advert");
        $req->execute();
        while ($advert = $req->fetch(PDO::FETCH_ASSOC)) : ?>
            <div class="card">
                <h3 class="card-company-title"><?php echo $advert['title'] ?></h3>
                <span class="card-company-name">Company : <?php echo $advert['companyName'] ?></span>
                <span class="card-company-location">Location : <?php echo $advert['adress'] ?> &nbsp; <?php echo $advert['postalCode'] ?> &nbsp; <?php echo $advert['city'] ?></span>
                <span class="card-company-date">Le <?php echo $advert['contractDate'] ?> </span>
                <span class="card-company-date"><?php echo $advert['salary'] ?> €</span>
                <span class="contract-type">Contract-type: <?php echo $advert['contractType'] ?></span>
                <div class="card-controls">
                    <a href="single-advert.php?id=<?php echo $advert['id'] ?>" class="card-button">See offer</a>
                    <a href="deletePost.php?id=<?= $advert['id'] ?>" class="card-button">Delete</a>
                </div>
            </div>
        <?php endwhile ?>
    </div>
</div>
<?php require_once('./components/footer.php') ?>
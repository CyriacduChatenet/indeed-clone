<?php require_once("components/header.php"); ?>

<div class="article-container">
    <h2 class="title-second">add advert</h2>
    <form action="add-article.php" method="post" class="form-container">
        <input type="text" placeholder="Title" name="title" class="input">
        <input type="text" placeholder="Company name" name="companyName" class="input">
        <input type="text" placeholder="Adress" name="adress" class="input">
        <input type="text" placeholder="City" name="city" class="input">
        <input type="text" placeholder="Postal code" name="postalCode" class="input">
        <input type="text" placeholder="Contract type" name="contractType" class="input">
        <input type="text" placeholder="Salary / month" name="salary" class="input">
        <input type="text" placeholder="Email" name="email" class="input">
        <input type="text" placeholder="contract date" name="contract date" class="input">
        <textarea name="content" class="form-control" id="" cols="40" rows="10" placeholder="content" name="content" ></textarea>
        <input type="submit" value="Create advert" class="button">
    </form>
</div>
<?php
require_once "connection.php";

$req = 'SELECT
                `id`,
                `image`,
                `prenom`,
                `nom`,
                `serie`,
                `description`
                FROM
                `card`
                WHERE
                  `id` = :id
                ;';

$stmt = $conn->prepare($req);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>home page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
</head>

<body>

<header class="main">

    <!--section navigation-->
    <nav class="header_main_wrapper">
        <div class="logo_container">
            <a class="link_homePage" href="index.php"><img class="img_logo" src="assets/logo.png" alt=""></a>
        </div>

        <div class="link_container">
            <a class="link_homePage" href="index.php">Accueil</a>
            <a class="link_homePage" href="admin.php">Admin</a>
        </div>
        <a class="create-para" href="create.php"><div class="create-link">
                Ajouter une carte
            </div></a>

        <!--section profile-->
        <div class="profile_container">
            <img class="img-profile" src="assets/IMG_43552.png" alt="photoDeProfileUser">
        </div>
    </nav>
</header>



<div class="principaleContainer">

    <!-- create -->

    <div class="create">
        <h2>Voulez</h2>
        <form action="doupdate.php" method="post">
            <input type="hidden" name="id" value="<?=$row['id']?>" placeholder="numéro de carte">
            <input type="text" name="image" value="<?=$row['image']?>" placeholder="image">
            <input type="text" name="prenom" value="<?=$row['prenom']?>" placeholder="Prenom">
            <input type="text" name="nom" value="<?=$row['nom']?>" placeholder="nom">
            <input type="text" name="serie" value="<?=$row['serie']?>" placeholder="serie">
            <input type="text" name="description" value="<?=$row['description']?>" placeholder="description">
            <input type="submit" name="envoy" value="modifier">
        </form>
    </div>
</body>
</html>
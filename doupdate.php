<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 26/02/2018
 * Time: 23:06
 */

require_once "connection.php";

$req = "UPDATE
`card`
SET
`image` = :image,
`prenom` = :prenom,
`nom` = :nom,
`serie` = :serie,
`description` = :description
WHERE 
`id`= :id

;";

    $stmt = $conn->prepare($req);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->bindValue(':image', $_POST['image']);
    $stmt->bindValue(':prenom', $_POST['prenom']);
    $stmt->bindValue(':nom', $_POST['nom']);
    $stmt->bindValue(':serie', $_POST['serie']);
    $stmt->bindValue(':description', $_POST['description']);
    $stmt->execute();
header('Location: index.php');

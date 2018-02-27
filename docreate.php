<?php
/** Create CRUD
 * @param into $req take database
 * @param into $conn connect database with connection. php
 * @return into $stmt create card
 */




require_once "connection.php";//relie connection.php à create.php

if(empty($_POST['image']) || empty($_POST['prenom']) || empty($_POST['nom']) || empty($_POST['serie']) || empty($_POST['description']))
{

    return header('Location: createError.php');

}


$req = 'INSERT INTO
`card`
(`image`, `prenom`, `nom`, `serie`, `description`)
VALUES
(:image, :prenom, :nom, :serie, :description)
;';

    $stmt = $conn->prepare($req);
    $stmt->bindValue(':image', $_POST['image']);
    $stmt->bindValue(':prenom', $_POST['prenom']);
    $stmt->bindValue(':nom', $_POST['nom']);
    $stmt->bindValue(':serie', $_POST['serie']);
    $stmt->bindValue(':description', $_POST['description']);
    $stmt->execute();
    header('Location: index.php');

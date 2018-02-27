<?php
/** DELETE CRUD
 * @param into $req take database
 * @param into $conn connect database with connection.php
 * @return into $stmt delete card
 */


require_once "connection.php";
$req = '
DELETE FROM
`card`
WHERE
    `id` = :id
;';

$stmt = $conn->prepare($req);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();

header('Location: index.php');



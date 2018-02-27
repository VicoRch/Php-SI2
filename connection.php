<?php
/** Connect database to php
 * @param into $conn stock connect database to php
 * @throws into $exeption if don't work
 */

try{$conn = new PDO('mysql:dbname=theCard;host=localhost', 'root', 'root');
}catch (PDOException $exception) {
die($exception->getmessage());
}

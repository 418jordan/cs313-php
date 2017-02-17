<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('conn.php');



    
    $name = $_POST['book'];
    $author = $_POST['chapter'];
    $publisher= $_POST['verse'];
    $year = $_POST['content'];

    $statement = $db->prepare("INSERT INTO book (name, author, publisher, year) VALUES(:name,:author,:publisher,:year)");
    $statement->bindValue(":name", $name);
    $statement->bindValue(":author", $author);
    $statement->bindValue(":publisher", $publisher);
    $statement->bindValue(":year", $year);
    $statement->execute();
    $statement->closeCursor();
    
    $newId = $db->lastInsertId('book_id_seq');
    echo $newId;
    
    $statement1 = $db->prepare("INSERT INTO review(rating, note_text) VALUES (:rating, :note_text)");
    $statement1->bindValue(":rating", $rating);
    $statement1->bindValue(":note_text", $note_text);
    $statement1->execute();
    $statement1->closeCursor();
 
 


?>

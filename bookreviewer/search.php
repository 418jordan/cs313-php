<?php
include('conn.php');

$searchterm=$_POST['search'];

$stmt = $db->prepare('SELECT * FROM bookreview WHERE book=:book ');
$stmt->bindValue(':book', $searchterm);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);


foreach ($rows as $row)
{
    echo '<form action="content.php" method="post">'.
            '<input name="id" type="hidden" value="'.$row['id'].'"/>'.
            '<input name="name" type="hidden" value="'.$row['name'].'"/>'.
            '<input name="author" type="hidden" value="'.$row['author'].'"/>'.
            '<input name="publisher" type="hidden" value="'.$row['publisher'].'"/>'.
            '<input name="year" type="hidden" value="'.$row['year'].'"/>'.
            '<input type="submit" value="'.$row['name'].' '.$row['author'].':'.$row['publisher'].'"/> ';
}






//foreach ($rows as $row)
//{
//  echo '<strong>'.$row['name'].' '.$row['author'].':'.$row['publisher'].'</strong><br/>';
//}

?>

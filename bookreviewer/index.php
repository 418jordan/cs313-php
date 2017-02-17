<?php

    
    <form action="search.php" method="post">
        <input type="text" name="search" id="search"/>
        <input type="submit" value="Submit"/>
    </form>
    
    
require 'conn.php';
echo '<h1>Book Reivew</h1>';

foreach ($db->query('SELECT * FROM book') as $row)
{
  echo '<strong>'.$row['name'].' '.$row['author'].':'.$row['publisher'].'</strong> - "'. $row['year'].'"<br/>';
 
}

?>
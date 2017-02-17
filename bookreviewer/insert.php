<!DOCTYPE html>
<html>
    <head>
        <title>Insert a book review</title>
    </head>
    <body>

<form action="bookinsert.php" id="book" method="POST">
    <label for="name">Name</label>
    <input type="text" name="name" /><br>
    <label for="author">Author</label>
    <input type="text" name="author" /><br>
    <label for="publisher">Publisher</label>
    <input type="text" name="publisher" /><br>
    <label for="year">Year</label>
    <input type="text" name="year" />
    <!--<textarea rows="4" cols="50" name"content" form="scripture">Enter scripture content here...</textarea>-->
    <br>
    <label for="name">Topics</label>
    <?php
    require 'conn.php';

    foreach ($db->query('SELECT * FROM book') as $row)
{
  echo '<input type="checkbox" name="topic" value="'.$row['id'].'" >'.$row['name'].'<br/>';
 
}
    ?>
    
    <input type="submit" name="submit"/>
</form>



    </body>
</html>
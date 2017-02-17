<?php
try
{
  $user = 'ubuntu';
  $password = 'jjj418';
  $db = new PDO('pgsql:host=127.0.0.1;dbname=ubuntu', $user, $password);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

?>
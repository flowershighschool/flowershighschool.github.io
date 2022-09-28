<?php
  try{
    $dsn = 'mysql: dbname=id19583723_login_database; host=localhost';
    $user = 'id19583723_thwanpo';
    $pswd = 'azerty123Aa.';
    $conn = new PDO($dsn, $user,$pswd);

    $conn->query('USE id19583723_login_database');
  }
  catch (PDOException $e){
    die('Error Connecting: '.$E->getMessage());
  }
?>
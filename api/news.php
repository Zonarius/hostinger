<?php
  $host = "mysql.hostinger.de";
  $username = "u118083675_user";
  $password = "wiaPgNqXx9EOeDPQb4Ak";
  $database = "u118083675_sql";

  $sth = mysqli_query("SELECT * FROM news;");
  $rows = array();
  while($r = mysqli_fetch_assoc($sth)) {
      $rows[] = $r;
  }
  print json_encode($rows);
?>

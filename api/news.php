<?php
  $host = "mysql.hostinger.de";
  $username = "u118083675_user";
  $password = "wiaPgNqXx9EOeDPQb4Ak";
  $database = "u118083675_sql";

  $con = mysqli_connect($host, $username, $password, $database);
  $sth = mysqli_query($con, "SELECT uuid, UNIX_TIMESTAMP(created) as created, UNIX_TIMESTAMP(edited) as edited, headline, text FROM news;");
  mysqli_close($con);
  $rows = array();
  while($r = mysqli_fetch_assoc($sth)) {
      $rows[] = $r;
  }
  print json_encode($rows);

?

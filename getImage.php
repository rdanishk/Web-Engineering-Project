<?php
  $id = $_GET['id'];
  // do some validation here to ensure id is safe

  $link = mysqli_connect("localhost", "root", "", "agency");
  $sql = "SELECT image FROM images WHERE id = '$id'";
  $result = mysqli_query($link, $sql);
  $row = mysql_fetch_assoc($result);
  mysql_close($link);

  header("Content-type: image/jpeg");
  echo $row['image'];
?>
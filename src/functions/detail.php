<?php
require_once("../database/db_connect.php");

if (isset($_GET["id"])) {
  $id = $_GET["id"];

  db();
  global $link;
  $query = "SELECT todoTitle, todo, date FROM todo WHERE id = '$id'";
  $result = mysqli_query($link, $query);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    if ($row) {
      $title = $row["todoTitle"];
      $description = $row["todo"];
      $date = $row["date"];

      echo "
        <h2>$title</h2>
        <h3>$description</h3>
        <p>$description</p>
        <small>$date</small>
      ";
    }
  }
} else {
  echo "You must use id!";
}
?>
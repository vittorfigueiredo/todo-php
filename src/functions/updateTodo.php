<?php
require_once("../database/db_connect.php");

if (isset($_POST["submit"])) {
  $todoTitle = $_POST["todoTitle"];
  $description = $_POST["todoDescription"];
  $id = $_GET["id"];

  db();
  global $link;

  $query = "UPDATE todo SET todoTitle = '$todoTitle', todo = '$description', date = now() WHERE id = '$id'";
  $update = mysqli_query($link, $query);
  if ($update) {
    echo "Success!";
  } else {
    echo mysqli_error($link);
  }
  header("Loaction: /index.php");
}

?>
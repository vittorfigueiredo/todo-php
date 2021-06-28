<?php

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

require_once("../database/db_connect.php");

if (isset($_POST["submit"])) {
  $title = $_POST["todoTitle"];
  $description = $_POST["todoDescription"];

  // Conectar ao bd
  db();
  global $link;

  $query = "INSERT INTO todo (todoTitle, todo, date) VALUES ('$title', '$description', now()) ";

  $insertTodo = mysqli_query($link, $query);
  if ($insertTodo) {
    echo "Success";
  } else {
    echo mysqli_error($link);
  }
  mysqli_close($link);
  header("Location: ../index.php");
}
?>
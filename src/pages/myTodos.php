<?php
require_once("../database/db_connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ToDo - List</title>
</head>
<body>
  <h1><?php echo date("l jS \of F Y h:i:s A"); ?></h1>

  <p><a href="../index.php">Add todo</a></p>

  <?php
    db();
    global $link;

    $query = "SELECT id, todoTitle, todo, date FROM todo";
    $result = mysqli_query($link, $query);

    //check if theres's any data inside the table
    if (mysqli_num_rows($result) >= 1) {
      while ($row = mysqli_fetch_array($result)) {
        $id = $row["id"];
        $title = $row["todoTitle"];
        $description = $row["todo"];
        $date = $row["date"];
  ?>

  <ul>
    <li>
      <a href="<?php echo '../functions/detail.php?id='.$id?>"><?php echo $title ?></a>
    </li> <?php echo "[[ $date ]]";?>
    <a href="../functions/deleteTodo.php?id=<?php echo $id?>">Excluir</a>
    <a href="../pages/updateTodo.php?id=<?php echo $_POST['$id']?>&<?php echo $_POST['$title'] ?>&<?php echo $_POST['$description'] ?>">Atualizar</a>
  </ul>
  <?php
    }
  }
  ?>
</body>
</html>

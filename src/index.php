<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ToDo< - Home </title>
</head>
<body>
  <h1>Add ToDo</h1>

  <p><a href="./pages/myTodos.php">All todos</a></p>

  <form method="post" action="./functions/addTodo.php">
      <p>Todo title:</p>
      <input name="todoTitle" type="text">
      <p>Todo description:</p>
      <input name="todoDescription" type="text">
      <br><br>
      <input type="submit" name="submit" value="submit">
  </form>
</body>
</html>

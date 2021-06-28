<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo- Update </title>
</head>
<body>
  <h1>Update Todo</h1>

  <p><a href="../pages/myTodos.php">Voltar</a></p>

  <form method="post" action="../functions/updateTodo.php?id=<?php echo $_GET['id']?>">
      <p>Todo title:</p>
      <input name="todoTitle" type="text" value="<?php echo $_GET['title'] ?>">
      <p>Todo description:</p>
      <input name="todoDescription" type="text" value="<?php echo $_GET['todo'] ?>">
      <br><br>
      <input type="submit" name="submit" value="Update">
  </form>
</body>
</html>
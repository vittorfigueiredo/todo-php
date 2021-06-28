<?php
require_once("../database/db_connect.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    db();
    global $link;
    $query = "DELETE FROM todo WHERE id = '$id'";
    mysqli_query($link, $query);
    mysqli_close($link);

    echo "Todo excluido com sucesso!";
    header("Location: ../pages/myTodos.php");

} else {
    echo "You must use id!";
}

?>
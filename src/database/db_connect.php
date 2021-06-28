<?php
function db() {
  global $link;
  $link = mysqli_connect("165.227.198.163", "vitor", "estagio1005#", "desafio") or
  die("Não foi possvel conectar no banco de dados!");
  return $link;
}

// if (db()) {
//   echo "Conectado!";
// }
?>
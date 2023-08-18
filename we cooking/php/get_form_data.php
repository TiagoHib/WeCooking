<?php
require_once('./conn.php');

$id = $_POST['id'];

$sql = "SELECT nome, tempo_preparo, images FROM receita WHERE id_receita = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["nome"]. " - Name: " . $row["tempo_preparo"]. " " . $row["images"]. "<br>";
  }
} else {
  echo "0 results";
}
?>
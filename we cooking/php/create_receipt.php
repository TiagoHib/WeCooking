<?php
require_once('./conn.php');

$nome = $_POST['nome'];
$preparo = $_POST['tempo-preparo'];
$num_ingrs = $_POST['ingredientes'];
$dificuldade = $_POST['dificuldade'];
$data = date("Y-m-d H:i:s");
$ingredientes = "";

for ($i = 1; $i <= $num_ingrs; $i++) {
	$ingrediente = $_POST['ingrediente'.$i];
	$ingredientes = $ingredientes . ',' . $ingrediente;
}

var_dump($ingredientes);

$sql = "INSERT INTO receita (nome, tempo_preparo, ingredientes, data_adicionada, dificuldade) 
	VALUES ('$nome', '$preparo', '$ingredientes', '$data', '$dificuldade')";
if (mysqli_query($conn, $sql)) {
	echo "*" . json_encode(mysqli_insert_id($conn));
	$id = json_encode(mysqli_insert_id($conn));
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
<?php
session_start();
include('connection.php');

if(empty($_POST['user']) || empty($_POST['password'])) {
	header('Location: loginuser.php');
	exit();
}
$user = mysqli_real_escape_string($conexao, $_POST['user']);
$password = mysqli_real_escape_string($conexao, $_POST['password']);

//PEGAR DADOS DA TABELA
//$consulta = "SELECT * FROM usuarios";
//$con = $mysqli->query($consulta) or die ($mysqli->error);

$query = "SELECT `user` FROM users WHERE `user` = '{$user}' and password = ('{$password}')";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['user'] = $user;
	header('Location: ../conta/account.php');
	    echo("erro no login mesmo");
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: /mensageiroempresa/index.php');
	exit();
}
?>
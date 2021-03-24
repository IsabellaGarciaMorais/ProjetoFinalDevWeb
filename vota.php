<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "rappers";


//_________________________________________Conexão
$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if(!$conexao){
	echo "Falha na conexão";
	echo "<pre>";
	var_dump($conexao);
	echo "</pre>";
}else{
	echo "Banco de dados conectado com sucesso!";
}

$id = $_GET['id'];

vota($conexao, $id);

function vota($conexao, $id){
	echo "<br>Esse é o ID= $id<br>";

	//UPDATE rapper SET votos=votos+1 WHERE id=1
	$script = "UPDATE rapper SET votos=votos+1 WHERE id=".$id;
	$atualiza = $conexao->query($script);

	if(!$atualiza){
		echo "Atualização incorreta <br>";
		echo $conexao->error;
		echo "<br>" . $script;
	}else{
		header('Location: index.php');
		echo "Atualização correta";
	}
}


?>
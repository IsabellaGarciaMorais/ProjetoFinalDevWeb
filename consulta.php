<?php include("funcoes.php");

$consulta = consulta($conexao);


function consulta($conexao){

	$script = "SELECT * FROM rapper";

	$consulta = $conexao->query($script);
	if(!$consulta){
		echo "<br>Inserção incorreta! Deu erro!<br>";
		echo $conexao->error;
		echo "<br><br>";
		echo $script;
		echo "<br>";
		echo '<script>alert("Cadastro incorreto!")</script>';
		echo '<script>window.location="cadastro.php"</script>';
	}else{
		return $consulta;
		echo "<br>Consulta realizada corretamente!";
		echo '<script>alert("Cadastro feito com sucesso!")</script>';
		echo '<script>window.location="cadastro.php"</script>';
	}
}


?>
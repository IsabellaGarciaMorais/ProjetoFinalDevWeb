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


//_________________________________________Inserir_Rapper
// no HTML criar formulario inserir rapper
// quando submeter o formulario chama a funcao inserir rapper
/*function inserirRapper($conexao, $rapper){
	//INSERT INTO rapper VALUES (DEFAULT, 'Djonga', 0)

	$script = "INSERT INTO rapper VALUES (DEFAULT, $rapper, 0)";
	$script = 'INSERT INTO rapper VALUES (DEFAULT,' . $rapper . ', 0)';

	$insere = $conexao->query($script);
	if(!$insere){
		echo "<br>Inserção incorreta! Deu erro!<br>";
		echo $conexao->error;

		echo "<br><br>";
		echo $script;
		echo "<br>";
	}else{
		echo "<br>Inserção Realizada corretamente!";
	}

}





function adicionarVoto($conexao, $rappers){

	$script = 'INSERT INTO rappers VALUES (DEFAULT, "' . $emicida . '"),(' . $baco . '),(' . $manobrown . '),(' . $sabotage . '),(' . $mariana . ') ,(' . $djonga . '),(' . $voto . ') ';

	$insere = $conexao->query($script);
	if(!$insere){
		echo "<br>Inserção incorreta! Deu erro!<br>";
		echo $conexao->error;

		echo "<br><br>";
		echo $script;
		echo "<br>";
	}else{
		echo "<br>Inserção Realizada corretamente!";
	}
}


//_________________________________________Consulta ao BD
function consulta($conexao){

	$script = "SELECT * FROM rappers";

	$consulta = $conexao->query($script);

	if(!$consulta){ //se o retorno der falso
		echo "Consulta incorreta";
		echo $conexao->error;
		echo $script;
	}else{
		echo "<br>Consulta realizada com sucesso!";
	}

  	$dados = $consulta->fetch_all();

  	/*
  	echo "<pre>";
  	print_r($dados);
  	echo "</pre>";
  	*/

  	/*return $dados;

}

//_________________________________________Atualização
/*atualiza($conexao, 10, 101.70);
	
function atualiza($conexao, $cod, $preco){

	$script = "UPDATE produto SET preco= $preco WHERE cod= $cod";
	$atualiza = $conexao->query($script);

	if(!$atualiza){
		echo "Atualização incorreta <br>";
		echo $conexao->error;
		echo "<br>" . $script;
	}else{
		echo "Atualização correta";
	}
}
*/
//_________________________________________Exclusão
//exclusao($conexao, 4);

/*function exclusao($conexao, $cod){
	$script = "DELETE FROM produto WHERE cod=$cod";
	$exclui = $conexao->query($script);

	if(!$exclui){
		echo "Exclusão foi incorreta <br>";
		echo $conexao->error;
		echo "<br>" . $script;
	}else{
		echo "Exclusão realizada corretamente";
	}

}

$dados = consulta($conexao);

*/

?>
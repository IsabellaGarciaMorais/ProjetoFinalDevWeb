<?php include("funcoes.php");

function inserir($conexao, $dad, $destino){
	
	$script = 'INSERT INTO rapper VALUES (DEFAULT, "' . $dad[0] . '", "' . $dad[1] . '", "' . $destino . '",' . 0 . ')';

	$insere = $conexao->query($script);
	if(!$insere){
		echo "<br>Inserção incorreta! Deu erro!<br>";
		echo $conexao->error;
		echo "<br><br>";
		echo $script;
		echo "<br>";
		echo '<script>alert("Cadastro incorreto!")</script>';
		echo '<script>window.location="cadastro.php"</script>';
	}else{
		echo "<br>Inserção realizada corretamente!";
		echo '<script>alert("Cadastro feito com sucesso!")</script>';
		echo '<script>window.location="cadastro.php"</script>';
	}
}

$dad = array($_POST['formnome'], $_POST['formmusica']);
$dir= "images/";
$file= $_FILES['formfoto'];
$destino= "$dir". $file["name"];

move_uploaded_file($file['tmp_name'], $destino);

inserir($conexao,$dad,$destino);



?>
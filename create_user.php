<?php

require_once 'config.php';

$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
try{
	
	$sql_query1 ="INSERT INTO usuario(nome,email,senha,data_criacao)values('$nome','$email',$senha,CURRENT_TIMESTAMP)";
	$pdo->query($sql_query1);

	echo "Usuário cadastrado com sucesso.";
	
}catch(PDOException $e){
	//echo $e->getMessage();
	echo "Erro ao cadastrar usuário: " . $e->getMessage();
}

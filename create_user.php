<?php

require_once 'config.php';

$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
try{

	$myPDO =new PDO("pgsql:host=172.17.0.3;dbname=postgres","postgres","teupaiandadeuno");
	
	$sql_query1 ="INSERT INTO usuario(nome,email,senha,data_criacao)values('$nome','$email',$senha,CURRENT_TIMESTAMP)";
	$myPDO->query($sql_query1);

	echo "Usuário cadastrado com sucesso.";
	
}catch(PDOException $e){
	//echo $e->getMessage();
	echo "Erro ao cadastrar usuário: " . $e->getMessage();
}

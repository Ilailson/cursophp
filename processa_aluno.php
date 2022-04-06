<?php 

include 'db.php';

$nome_aluno = $_POST['nome_aluno'];
$data_nascimento = $_POST['data_nascimento'];

$query = "INSERT INTO ALUNOS(nome_aluno, data_nascimento) VALUES('$nome_aluno', '$data_nascimento')";

mysqli_query($conexao, $query);

//voltando para página aluno após a inclusão
header('location:index.php?pagina=alunos');

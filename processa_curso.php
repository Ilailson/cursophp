<?php 

//incluindo o banco de dados pois é outra página
include 'db.php'; //tem a conexão com o banco de dados. 


//trazendo a informação da página inserir curso
//campos name do formlário inserir curso
$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];


//testando envio de formulário
//echo $nome_curso;
//echo $carga_horaria;


//inserindo os dados no banco de dados.
$query = "INSERT INTO CURSOS(nome_curso, carga_horaria) VALUES('$nome_curso', $carga_horaria)";

//conexão está puxando da página db.php
mysqli_query($conexao, $query);

//apos a inclusão volta para curso
header('location:index.php?pagina=cursos');

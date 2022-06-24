<?php
  
  // incluir arquivo de conexão sempre que precisar
include_once 'conecta.php';

// consulta em SQL que sera executada na base de dados
$sql = " SELECT * FROM  alunos";

//armazenar o resultado da consulta
$resultado = mysqli_query($conexao , $sql);

if (mysqli_num_rows($resultado) > 0) {

    //saida de dados de cada linha na tabela

    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "id:" . $linha["id"]. "<br>";
        echo "Nome:" . $linha["nome"]. "<br>";
        echo "Curso:" . $linha["curso"]. "<br>";
        echo "Idade:" . $linha["idade"]. "<br>";}
} else {
    echo " 0 resultados";
}


// fechar conexão

mysqli_close($conexao);


?>
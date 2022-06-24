<?php

//  Dados do SGBD My SQL para a conexão

$servidor = "localhost";

$usuario = "root";

$senha = "";

$banco = "teste_mysqli";



//Criando a conexão

$conexao = new mysqli($servidor, $usuario, $senha, $banco);



if ($conexao->connect_error) {

    die ("Conexão falhou"  . $conn->connect_error);

}

//echo "Conectado com sucesso";

?>
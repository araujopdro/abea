<?php
 /* Dados do Banco de Dados a conectar */
$Servidor = '216.172.161.24';
$nomeBanco = 'acesse07_abea';
$Usuario = 'acesse07_pedro';
$Senha = 'YxmDfC4aCCRceCf';

$bd = mysqli_connect($Servidor, $Usuario, $Senha, $nomeBanco);

if ($mysqli->connect_errno) {
    echo "Erro de conexão com localhost, o seguinte erro ocorreu -> ";
    echo "Error: Erro de conexão com banco de dados, o seguinte erro ocorreu -> \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
} 
?>
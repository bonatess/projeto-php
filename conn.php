<?php 
$conn = new mysqli('localhost','aluno','aluno','Festival');

if(msqli_connect_error()){
    echo 'Erro de conexao';
}else{
    echo 'Deu certo pivete!';
}
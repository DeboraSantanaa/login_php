<?php 

$servidor='localhost';
$usuario='root';
$senha='';
$banco='crudphp';

$conexao = new mysqli($servidor,$usuario,$senha,$banco);


//apresentar o erro, caso ocorra algum erro na conexao
if (mysqli_connect_error()){
    trigger_error(mysqli_connect_error());
}

?>
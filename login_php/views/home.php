<?php
//impedir que o usuario acesse a pagina HOME sem estar logado

session_start();

require_once('../conexao.php');

//no if , verificar se a session logado existe, se diferente de logado não ira logar
if (!$_SESSION['logado']) {

    // Este Header é para caso o usuario tente entrar na pagina sem estar logado ira encaminha para o login
    header(('Location:../index.php'));
}

$id = $_SESSION['id'];

$query = 'SELECT nome FROM usuario WHERE id=' . $id;
$result = mysqli_query($conexao, $query); //associando ao resultado do banco para reaproveitar valores
$row = mysqli_fetch_assoc($result);
?>


<!-- HOME AREA QUE O USUARIO TEM ACESSO -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logado</title>
</head>

<body>

    <h1>Welcome!</h1>
<!--     a tag p neste caso foi usada junto com o $row e ira retornar o nome do usuario -->
    <p><?php echo $row['nome'] ?></p>



   <a href="../action/sair.php">Sair</a>
</body>

</html>
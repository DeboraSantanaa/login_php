<?php
//para o login é necessario iniciar com uma seção

//para inicializar essa seção utilizar o seguinte comando
session_start();

require_once('../conexao.php');

//verificar se o usuario enviou o email e senha
//obs *** ainda havera uma mudança futura em relação ao uso do isset
if (isset($_POST['email']) && isset($_POST['senha'])) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];


    //resgatar informação do usuario no banco de dados onde o email e senha sejam iguais
    $sql = "SELECT * FROM usuario WHERE email='$email' AND senha ='$senha' ";

    $consulta = mysqli_query($conexao,$sql);


    //contador para verificar a quantidade de linhas retornadas do banco ou seja a quantidade de usuario com o mesmo email e senha
    $contador = mysqli_num_rows($consulta);



    //fazer o dado virar um objeto para resgatar somente 1 valor do usuario.
    if ($contador == 1) {
        while ($dados = mysqli_fetch_array($consulta)) {


            // aspas dentro da sessio para criar uma variavel que quando for chamada ela vai existir em algum lugar
            //sesion é para armazenar valores na seção ex. o usuario atualiza a pagina e continua logado.
            $_SESSION['id']=$dados['id'];


            //para verificar se o usuario esta logado e permanecer logado.
            $_SESSION['logado'] = "logado";


                //usuario ser direcionado para o home do site
            header('Location:../views/home.php');
        }

        //se nao tiver nenhum usuario ele vai mandar para o login, não permitindo que o usuario acesse a pagina de usuario sem estar logado
    }else{
        session_start();
        $_SESSION['erro'] = true;

        header(('Location:../index.php'));
    }


}

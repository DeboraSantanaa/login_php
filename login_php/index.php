<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>

    <form action="action/validar.php" method="post">
        <div>
            <label for="email">Email</label>
            <input type="text" id='email' name='email'>
        </div>

        <div>
            <label for="senha">Senha</label>
            <input type="password" id='senha' name='senha'>
        </div>


        <div>
            <button type="submit"> Logar </button>
        </div>


    </form>

</body>

</html>
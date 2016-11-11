<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Mr. Robot - Central </title>
        <style>
            body {
                background-image: url("img/fundo.jpg");
            }
            input[type=text] {
                width: 50%;
                padding: 8px 20px;
                margin: 1px 0;
            }
            input[type=password] {
                width: 45%;
                padding: 7px 20px;
                margin: 1px 0;
            }
            input[type=text]:focus, input[type=number]:focus {
                border: 4px ridge activeborder;
            }
            input[type=button], input[type=submit], input[type=reset] {
                background-color: buttonhighlight;
                color: black;
                font-weight: bold;
                padding: 16px 32px;
                text-decoration: none;
                margin: 4px 45%;
                cursor: pointer;
                font-size: 14px;
            }
            h1 {
                font-size: 25px;
                font-family: Helvetica;
                font-weight: bold;
                color: #ff0000;
            }
            h2 {
                font-size: 20px;
                font-family: Helvetica;
                font-weight: bold;
                color: #ff0000;
            }
            h3 {
                font-size: 19px;
                font-family: Helvetica;
                font-weight: bold;
                color: #0000ff;
                text-align: center;
            }
        </style>
    <fieldset style = "width: 45%; margin: 100px auto; opacity:.80;">
        <form action=" " method="post"> 
            <center>
                <legend><h1> Login: </h1></legend><br>
                <h2><b> Usuário: </b><input type="text" name="usuario"/></h2>
                <h2><b> Senha: </b><input type="password" name="senha"/></h2><br>
                <input type='submit' name="OnLogin" value='Entrar'/>
                <br>
                <br>
            </center>
        </form>
    </head>
    <body>
        <?php
        error_reporting(1);
        ob_start();
        session_start();

        if (isset($_POST['OnLogin'])):

            $usuario = @$_POST['usuario'];
            $senha = @$_POST['senha'];

            if (empty($usuario)):
                echo "<h3> Preencha o campo usuário </h3>";
            elseif (empty($senha)):
                echo "<h3> Preencha o campo senha </h3>";
            else:
                include_once '_inc/connection.php';
                if ($usuario == $usuarioLogin AND $senha == $senhaLogin):
                    $_SESSION['usuarioSession'] = $usuario;
                    $_SESSION['senhaSession'] = $usuario;
                    header("Location: _pages/index.php");
                else:
                    echo "<h3> Usuário ou senha inválidos. <h3>";
                endif;
            endif;
        endif;
        ?>
</fieldset>
</body>
</html>

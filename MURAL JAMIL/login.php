<?php
include_once "conexao.php";

if(isset($_POST['btn_enviar']))
{
    $usuarioP = $_POST['txt_usuario'];
    $senhaP = $_POST['txt_senha'];

    $sql = "SELECT * FROM tb_login WHERE usuario = '$usuarioP' AND senha = '$senhaP';";
    $consulta = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($consulta) > 0)
    {
        echo "acesso liberado";
        session_start();
        $_SESSION['usuario'] = $usuarioP;
        $_SESSION['senha'] = $senhaP;
        header("Location: area.php");
    }else{
        echo "Usuario/Senha incorretos!!!";
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="login">
        <form action="login.php" method="post" enctype="multipart/form-data">
            <label for="txt_usuario">Usuário:</label>
            <input type="text" name="txt_usuario" id="txt_usuario">
            <br>
            <label for="txt_senha">Senha:</label>
            <input type="txt" name="txt_senha" id="txt_senha">
            <br>
            <input type="submit" value="Entrar" name="btn_enviar">
            <input type="reset"  value="Limpar">
        </form>
    </div>
</body>
</html>
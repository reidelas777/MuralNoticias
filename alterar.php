<?php
include_once "conexao.php";
session_start();
if(!isset($_SESSION['usuario']))
{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <header>Area Administrativa</header>
        <div id="menu">
            Bom dia <?php echo $_SESSION['usuario'];?>
            <a href="sair.php">Desconectar</a>
        </div>
        <?php
        if (isset($_GET['alterar']))
        {
            $alterar = $_GET['alterar'];
            echo '
            <div id="enviar">
            <form action="#" method="post" enctype="multipart/form-data">
                De:
                <input type="text" name="txt_de" id="txt_de" value="'.$dados.'">
                <br>
                Para:
                <input type="text" name="txt_para" id="txt_para" value="'.$dados.'">
                <br>>
                <br>
                Mensagem:
                <input type="text" name="txt_msg" id="txt_msg" value="'.$dados.'">
                <br>>                
                <span class="botoes">
                    <input type="submit" value="Enviar" name="btn_enviar">
                    <input type="reset" value="Limpar" name="btn_enviar">
                </span>
            </form>
        </div>
            ' ;
        }

    ?>
    </div>
    
</body>
</html>
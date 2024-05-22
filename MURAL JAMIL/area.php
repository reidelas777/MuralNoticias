<?php
include_once "conexao.php";
session_start();
if(!isset($_SESSION['usuario']))
{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Restrita</title>
</head>
<body>
    <h1>Area Restrita</h1>
    <p>Bom dia <?php echo $_SESSION['usuario'];?></p>
    <a href="sair.php">Desconectar</a>
    <?php
    if (isset($_GET['excluir']))
    {
        $excluir = $_GET['excluir'];
        $sql = "DELETE FROM tb_mural WHERE id_mural = '$excluir';";
        $consulta = mysqli_query($conexao, $sql);
        echo "Registro excluido com sucesso !";

    }
?>
<?php




</body>
</html>
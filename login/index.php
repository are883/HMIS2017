<?php
session_start();
include_once "conexion.php";
include_once "estilos.css";

if(!isset($_SESSION['userid']))
{
    if(isset($_POST['login']))
    {

        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1)
        {
            $_SESSION['userid'] = $result->idusuario;
            header("location:index.php");
        }
        else
        {
            echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';
        }
    }
    if(isset($_POST['registro']))
    {
        header("location:registrarse.php");
      }
?>

<form action="" method="post" class="login">
    <div><label>Usuario</label><input name="user" type="text" ></div>
    <div><label>Contraseña</label><input name="password" type="password"></div>
    <div><label><input name="registro" type="submit" value="Registrarse"></label>
    <div><label><input name="login" type="submit" value="Iniciar Sesión"></div>
</form>
<?php
} else {
        header("location:usuarioRegistrado.php");
}
?>

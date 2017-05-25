<?php
echo '<div class="correcto">El usuario ingresó correctamente.</div>';
if(isset($_POST['logout']))
{
    header("location:logout.php");
  }
?>
<style type="text/css">
*{
font-size: 14px;
}
body{
background:#aaa;
}
form.login {
background: none repeat scroll 0 0 #F1F1F1;
border: 1px solid #DDDDDD;
font-family: sans-serif;
margin: 0 auto;
padding: 20px;
width: 278px;
box-shadow:0px 0px 20px black;
border-radius:10px;

}
form.login div {
margin-bottom: 15px;
overflow: hidden;
}
form.login div label {
display: block;
float: left;
line-height: 25px;
}
form.login div input[type="text"], form.login div input[type="password"] {
border: 1px solid #DCDCDC;
float: right;
padding: 4px;
}
form.login div input[type="submit"] {
background: none repeat scroll 0 0 #DEDEDE;
border: 1px solid #C6C6C6;
float: right;
font-weight: bold;
padding: 4px 20px;
}

.error{
color: red;
font-weight: bold;
margin: 10px;
text-align: center;
}

.correcto{
    color: green;
    font-weight: bold;
    margin: 10px;
    text-align: center;
}

</style>

<form action="" method="post" class="login">
<div><label>Sesión iniciada</label><input name="logout" type="submit" value="Cerrar Sesión"></div>
</form>

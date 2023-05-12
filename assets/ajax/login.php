<?php
session_start();
include "../include/mysqlconecta.php";

$hoje = date('Y-m-d');

$username = $_POST['username'];
$password = $_POST['password'];

if(isset($username) && isset($password)){        
        
    $SQL = "select * from usuarios where usuario = '$username'";    
    $result = @mysqli_query($conexao,$SQL) or die("Erro no banco de dados! 1");                                            
    $rows = mysqli_fetch_array($result);

    $password = md5($password);
    
    if(!strcmp($password, $rows['senha']) && $rows['status'] == 1){
             
        $_SESSION["perfil"] = $rows['perfil'];
        $_SESSION["email"] = $rows['email'];
        $_SESSION["usuario"] = $rows['usuario'];        
        $_SESSION['foto_nao_encontrada'] = true;
        
        $foto_recuperada = './assets/images/default_avatar.png'; 
        $_SESSION['foto_perfil'] = $foto_recuperada;
                        
        echo "<input type='hidden' name='retorno' id='retorno' value='s'>";
        exit;

    } else {
        echo "<input type='hidden' name='retorno' id='retorno' value='usu_senha'>";
        session_destroy(); 
        exit; 
    }

} else {    
	echo "<input type='hidden' name='retorno' id='retorno' value='usu_senha'>";
    session_destroy();
    exit;
}
?>
<?php
include_once 'connect.php';

$user = $_POST['log_user'];
$password = $_POST['log_pass'];


if(!isset ($user) == true || !isset ($password) == true){
    header('Location: ../');
}
else{
    $SQL_SearchUser = mysqli_query($connect, "SELECT count(*), td_id, td_name, td_user, td_datacadastro FROM tb_user where td_user = '$user' and td_pass = '$password' and td_status = 'A' ", MYSQLI_USE_RESULT);

    while($ArraySQL = mysqli_fetch_array($SQL_SearchUser)) {
    $Autentification = $ArraySQL[0];

        if($Autentification == 1){
            session_start();

            $_SESSION['id_user'] = $ArraySQL[1];
            $_SESSION['name'] = $ArraySQL[2];
            $_SESSION['user'] = $ArraySQL[3];
            $_SESSION['datacadastro'] = $ArraySQL[4];
            header('Location: ../?r=UserPassSucess');
        }
        else{
            header('Location: ../?r=UserPassFail');
        }

        


    }
}


?>
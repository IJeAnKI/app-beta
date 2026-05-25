<?php

require('../config/database.php');

$e_mail = $_POST['email'];
$p_asswd = $_POST['pswd'];

$sql_login = "
SELECT * FROM users_model
WHERE email = '$e_mail'
";
$res = pg_query($local_conn, $sql_login);

if($res){
    if(pg_num_rows($res) > 0){
        $user = pg_fetch_assoc($res);
        if(password_verify($p_asswd, $user['pasword'])){
            header('Location: home.php');
        } else {
            echo "<script>alert('Password incorrecto')</script>";
            header('refresh:0;url=signin.html');
        }
    } else {
        echo "<script>alert('Usuario no encontrado')</script>";
        header('refresh:0;url=signin.html');
    }
} else {
    echo "Query error !!!";
}
?>
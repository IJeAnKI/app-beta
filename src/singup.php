<?php
    include('../config/database.php');
    
    //Get data
    $f_name = $_POST['fname'];
    $l_name = $_POST['lname'];
    $e_mail = $_POST['email'];
    $m_phone = $_POST['mphone'];
    $p_sswd = $_POST['passwd'];
    $enc_pass = password_hash($p_sword, PASSWORD_BCRYPT);

    //Query to insert into SQL
    $sql = "INSERT INTO users (firstname, lastname, email, mobile_phone, password)
        VALUES('$f_name', '$l_name', '$e_mail', '$m_phone', '$enc_sswd')
    ";

    //email
    // VALIDAR EMAIL
    $check_email = "SELECT 1 FROM users WHERE email = $1";
    $res_email = pg_query_params($local_conn, $check_email, array($e_mail));

    if (pg_num_rows($res_email) > 0) {
        echo "Error: El correo ya está registrado";
        exit();
    }

    // VALIDAR TELÉFONO
    $check_phone = "SELECT 1 FROM users WHERE mobile_phone = $1";
    $res_phone = pg_query_params($local_conn, $check_phone, array($m_phone));

    if (pg_num_rows($res_phone) > 0) {
        echo "Error: El número de celular ya está registrado";
        exit();
    }

$res_local = pg_query($local_conn, $sql); 


    //Execute query
    pg_query($sql);
?>
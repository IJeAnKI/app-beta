<?php
<<<<<<< HEAD
include('../config/database.php');

// Get data
$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$e_mail = $_POST['email'];
$m_phone = $_POST['mphone'];
$p_sswd = $_POST['passwd'];
$enc_pass = md5($p_sswd);

// EMAIL
$check_email = "SELECT 1 FROM users WHERE email = '$e_mail'";
$res_email = pg_query($local_conn, $check_email);

if (pg_num_rows($res_email) > 0) {
    echo "Error: El correo ya está registrado";
    exit();
}

// TELÉFONO
$check_phone = "SELECT 1 FROM users WHERE mobile_phone = '$m_phone'";
$res_phone = pg_query($local_conn, $check_phone);

if (pg_num_rows($res_phone) > 0) {
    echo "Error: El número de celular ya está registrado";
    exit();
}

pg_query($local_conn, "BEGIN");

// Query
$sql = "INSERT INTO users (firstname, lastname, email, mobile_phone, password)
        VALUES('$f_name', '$l_name', '$e_mail', '$m_phone', '$enc_pass')";

// Insert en LOCAL
$res_local = pg_query($local_conn, $sql);

if ($res_local) {
    // Insert en SUPABASE
    $res_supa = pg_query($supa_conn, $sql);

    if ($res_supa) {
        // TODO OK → guardar definitivamente
        pg_query($local_conn, "COMMIT");
        echo "Usuario registrado correctamente en ambos sistemas";
    } else {
        // FALLÓ SUPABASE → revertir LOCAL
        pg_query($local_conn, "ROLLBACK");
        echo "Error: Falló Supabase, operación revertida";
    }
} else {
    // FALLÓ LOCAL
    pg_query($local_conn, "ROLLBACK");
    echo "Error: No se pudo guardar en local";
}
=======
    include('../config/database.php');
    
    //Get data
    $f_name = $_POST['fname'];
    $l_name = $_POST['lname'];
    $e_mail = $_POST['email'];
    $m_phone = $_POST['mphone'];
    $p_sswd = $_POST['passwd'];
    $enc_pass = md5($p_sswd);

    //Query to insert into SQL
    $sql = "INSERT INTO users (firstname, lastname, email, mobile_phone, password)
        VALUES('$f_name', '$l_name', '$e_mail', '$m_phone', '$enc_sswd')
    ";    

    //Execute query
    pg_query($sql);
>>>>>>> abee4da4e2d89dc3e29ec8ef26e01e562d5d0a7b
?>
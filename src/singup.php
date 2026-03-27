<?php
include('../config/database.php');

// Get data
$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$e_mail = $_POST['email'];
$m_phone = $_POST['mphone'];
$p_sswd = $_POST['passwd'];
$enc_pass = md5($p_sswd); // lo dejamos como lo tenían

// ✅ VALIDACIÓN DE EMAIL (Feature 1)
$check_email = "SELECT 1 FROM users WHERE email = '$e_mail'";
$res_email = pg_query($local_conn, $check_email);

if (pg_num_rows($res_email) > 0) {
    echo "Error: El correo ya está registrado";
    exit();
}

// Query to insert into SQL
$sql = "INSERT INTO users (firstname, lastname, email, mobile_phone, password)
    VALUES('$f_name', '$l_name', '$e_mail', '$m_phone', '$enc_pass')
";

// Execute query
pg_query($local_conn, $sql);

echo "Usuario registrado correctamente";
?>
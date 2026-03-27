<?php
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
        VALUES('$f_name', '$l_name', '$e_mail', '$m_phone', '$p_sswd')";    
        VALUES('$f_name', '$l_name', '$e_mail', '$m_phone', '$enc_sswd')
    ";    

    //Execute query
    pg_query($sql);
?>
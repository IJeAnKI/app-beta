<?php
    // Local database configuration
    $LOCAL_HOST = 'localhost'; //127.0.0.1
    $LOCAL_DBNAME = 'app_beta';
    $LOCAL_USERNAME = 'postgres';
    $LOCAL_PASSWORD = 'unicesmag';
    $LOCAL_PORT = '5432';
    
    // Supabase database configuration
    $SUPA_HOST = '';
    $SUPA_DBNAME = '';
    $SUPA_USERNAME = '';
    $SUPA_PASSWORD = '';
    $SUPA_PORT = '';

    $data_connection = "
        host = $LOCAL_HOST
        dbname = $LOCAL_DBNAME
        user = $LOCAL_USERNAME
        password = $LOCAL_PASSWORD
        port = $LOCAL_PORT
    ";

    $conn = pg_connect($data_connection);

    if(!$conn){
        echo "Error: Unable to connect to database";
        exit();
    }else{
        echo "success connection ";
    }
?>
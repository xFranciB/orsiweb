<?php

require_once 'utils.php';

$_conn = null;

function database_connect(): ?mysqli {
    global $_conn;
    error_log("database_connect called");
    if ($_conn) return $_conn;

    error_log("Connecting to DB (connection not cached)");

    try {
        $conn = mysqli_connect(
            $_ENV['DB_HOSTNAME'],
            $_ENV['DB_USERNAME'],
            $_ENV['DB_PASSWORD'],
            $_ENV['DB_DATABASE']
        );
    } catch (Exception $e) {
        goto conn_error;
    }

    if ($conn) {
        $_conn = $conn;
        return $_conn;
    }

conn_error:
    // TODO: Error handling
    error_log('ERROR while connecting to Database: ' . mysqli_connect_error());
    return null;
}
<?php

require_once 'vendor/autoload.php';
Dotenv\Dotenv::createImmutable(__DIR__ . '/..')->load();

function greet() {
    return "Hello from utils.php";
}
<?php
require_once '../lib/database.php';
echo "Hello from backend<br>";

$conn = database_connect();

print_r($conn);
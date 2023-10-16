<?php
set_include_path('./../');
require_once 'lib/routes/users.php';

echo $_SERVER['REQUEST_METHOD'] . ' ' . $_SERVER['REQUEST_URI'];

// TODO: Stupid workaround
$_POST = json_decode(file_get_contents('php://input'), true);

// TODO: Make routes 'registerable' in some way
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['REQUEST_URI'] == '/users') {
  echo \Routes\Users::create($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['password']);
}

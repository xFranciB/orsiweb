<?php
set_include_path('./../');
require_once 'lib/routes/users.php';

// TODO: Stupid workaround
$payload = [
  'get' => $_GET?? [],
  'post' => json_decode(file_get_contents('php://input'), true)?? []
];

switch ($_SERVER['REQUEST_URI']) {
  case '/users': {
    \Routes\Users::handle($_SERVER['REQUEST_METHOD'], $payload);
    break;
  }

  default: {
    // TODO: Handle errors
    die();
  }
}

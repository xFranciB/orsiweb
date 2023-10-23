<?php
set_include_path('./../');

require_once 'lib/env.php';
require_once 'lib/response.php';

require_once 'lib/routes/users.php';

$payload = [
  'get' => $_GET?? [],

  // Stupid workaround for JSON
  'post' => json_decode(file_get_contents('php://input'), true)?? []
];

$res = null;

try {
  // TODO: Temporary, maybe do this better?
  switch ($_SERVER['REQUEST_URI']) {
    case '/users':
      $res = \Routes\Users::handle($_SERVER['REQUEST_METHOD'], $payload);
      break;

    default:
      $res = new \Utils\HTTPResponse(\Utils\HTTPStatus::NotFound);
      break;
  }

} catch (Throwable $e) {
  $res = new \Utils\HTTPResponse(\Utils\HTTPStatus::InternalServerError);

  if ($_ENV['DEBUG']) {
    $res->body = 'ERROR: An unhandled exception was thrown<br>' . PHP_EOL .
      get_class($e) . ': ' . $e->getMessage() . '<br><br>' . PHP_EOL . PHP_EOL .
      'Stack trace:<br>' . PHP_EOL;

    foreach ($e->getTrace() as $index => $entry) {
      $res->body .= "#$index: " . $entry['file'] . ':' .$entry['line'] . ' in function ' . $entry['function'] . '<br>' . PHP_EOL;
    }
  }
}

if (is_null($res)) {
  $res = new \Utils\HTTPResponse(\Utils\HTTPStatus::MethodNotAllowed);
}

$res->send();

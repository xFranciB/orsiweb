<?php
namespace Routes;
use \Utils\Sanitize;

require_once 'lib/sanitizer.php';
require_once 'lib/database.php';
require_once 'lib/models/users.php';

class Users {
  public static function handle(string $method, array $payload): mixed {
    switch ($method) {
      case 'POST': {
        return self::create($payload);
      }

      default: {
        die();
      }
    }
  }

  public static function create(array $payload): bool {
    $res = Sanitize\check($payload['post'], [
      'name' => [Sanitize\SPEC::Required, Sanitize\Spec::String],
      'surname' => [Sanitize\Spec::Required, Sanitize\Spec::String],
      'email' => [Sanitize\Spec::Required, Sanitize\Spec::Email],
      'password' => [Sanitize\Spec::Required, Sanitize\Spec::String]
    ]);

    if (!$res->status) {
      // TODO: standardize errors and do this better
      die(json_encode($res->error));
    }

    $conn = \Database\connect();
    
    return \Models\Users::create($conn,
      $payload['post']['name'],
      $payload['post']['surname'],
      $payload['post']['email'],
      $payload['post']['password']
    );
  }
}

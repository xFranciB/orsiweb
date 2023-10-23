<?php
namespace Routes;
use \Utils\Sanitize;

require_once 'lib/sanitizer.php';
require_once 'lib/database.php';
require_once 'lib/models/users.php';
require_once 'lib/response.php';

class Users {
  public static function handle(string $method, array $payload): ?\Utils\HTTPResponse {
    switch ($method) {
      case 'POST': {
        return self::create($payload);
      }
    }

    return null;
  }

  public static function create(array $payload): \Utils\HTTPResponse {
    $conn = \Database\connect();

    $res = Sanitize\check($payload['post'], [
      'name' => [Sanitize\SPEC::Required, Sanitize\Spec::String],
      'surname' => [Sanitize\Spec::Required, Sanitize\Spec::String],
      'email' => [Sanitize\Spec::Required, Sanitize\Spec::Email, Sanitize\Spec::UniqueStr($conn, 'users', 'email')],
      'password' => [Sanitize\Spec::Required, Sanitize\Spec::String]
    ]);

    if (!$res->status) {
      return \Utils\HTTPResponse::JSON(\Utils\HTTPStatus::BadRequest, $res->error);
    }
    
    \Models\User::create($conn,
      $payload['post']['name'],
      $payload['post']['surname'],
      $payload['post']['email'],
      $payload['post']['password']
    );

    return new \Utils\HTTPResponse(\Utils\HTTPStatus::Created);
  }
}

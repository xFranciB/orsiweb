<?php
namespace Routes;

require_once 'lib/sanitizer.php';
require_once 'lib/database.php';
require_once 'lib/models/users.php';

class Users {
  public static function create($name, $surname, $email, $password): bool {
    $name = \Utils\Sanitize\string($name);
    $surname = \Utils\Sanitize\string($surname);
    $email = \Utils\Sanitize\email($email);
    $password = \Utils\Sanitize\string($password);

    if (is_null($name) || is_null($surname) || is_null($email) || is_null($password)) {
      // TODO: standardize errors and do this better
      return false;
    }

    $conn = \Database\connect();
    
    return \Models\Users::create($conn, $name, $surname, $email, $password);
  }
}

<?php
namespace Models;

require_once 'lib/env.php';
require_once 'lib/models/base.php';

class User extends BaseModel {
  public int $id;
  public string $name;
  public string $surname;
  public string $email;
  public string $password;

  public function __construct(array $row) {
    $this->id = $row['id'];
    $this->name = $row['name'];
    $this->surname = $row['surname'];
    $this->email = $row['email'];
    $this->password = $row['password'];
  }

  public static function create(\mysqli $conn, string $name, string $surname, string $email, string $password): void {
    $password = hash_hmac('sha256', $password, $_ENV['PASS_HMAC']);
    $password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare('INSERT INTO users (name, surname, email, password) VALUES (?, ?, ?, ?)');
    $stmt->bind_param('ssss', $name, $surname, $email, $password);

    if (!$stmt->execute()) {
      // TODO: Make custom exception for MySQLi errors
      throw new \Exception();
    }

    if ($stmt->errno != 0) {
      // TODO: Make custom exceptions for MySQLi errors
      throw new \Exception();
    }
  }
  
  // Currently unused. Just here as an example
  public static function from_email(\mysqli $conn, string $email): User {
    $stmt = $conn->prepare('SELECT * FROM users WHERE email = ?');
    $stmt->bind_param('s', $email);
    
    if (!$stmt->execute()) {
      // TODO: Make custom exception for MySQLi errors;
      throw new \Exception();
    }

    return self::from_row($stmt->get_result()->fetch_assoc());
  }
}

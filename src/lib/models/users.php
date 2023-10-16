<?php
namespace Models;

require_once 'lib/env.php';

class Users {
  public static function create(\mysqli $conn, string $name, string $surname, string $email, string $password): bool {
    $password = hash_hmac('sha256', $password, $_ENV['PASS_HMAC']);
    $password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare('INSERT INTO users (name, surname, email, password) VALUES (?, ?, ?, ?)');
    $stmt->bind_param('ssss', $name, $surname, $email, $password);
    return $stmt->execute();
  }

  public static function from_email(\mysqli $conn, string $email): mysqli_result | false {
    $stmt = $conn->prepare('SELECT * FROM users WHERE email = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();

    return $stmt->get_result();
  }
}

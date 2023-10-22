<?php
namespace Models;

class BaseModel {
  final protected static function from_row(array $row) {
    return new static($row);
  }

  final protected static function from_result(\mysqli_result $result) {
    $arr = [];

    while ($row = $result->fetch_assoc()) {
      $arr[] = self::from_row($row);
    }

    return $arr;
  }
}

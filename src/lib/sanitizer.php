<?php
namespace Utils\Sanitize;

function string(mixed $str): ?string {
  if (is_null($str)) return null;

  $str = trim($str);

  if (is_string($str) && !empty($str)) return $str;
  return null;
}

function email(mixed $str): ?string {
  $str = string($str);
  if (is_null($str)) return null;

  return filter_var($str, FILTER_VALIDATE_EMAIL)? $str : null;
}

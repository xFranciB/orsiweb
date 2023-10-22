<?php
namespace Utils\Sanitize;

abstract class SPEC {
  const Required = 0;
  const String = 1;
  const Integer = 2;
  const Email = 3;
}

/**
 * Used as a response to the functions defined below.
 */
class Response {
  public bool $status;
  public string $error;
}

$spec_function = [
  SPEC::String => function(mixed &$str): Response {
    $res = new Response();

    if (!is_string($str)) {
      $res->error = 'Inserisci una stringa';
      $res->status = false;
      return $res;
    }

    $str = trim($str);
    $res->status = true;
    return $res;
  },

  SPEC::Integer => function(mixed &$int): Response {
    $res = new Response();

    if (is_int($int)) {
      $res->status = true; 
    } else {
      $res->status = false;
      $res->error = 'Inserisci un numero intero';
    }

    return $res;
  }
];

$spec_function[SPEC::Email] = function(mixed &$str): Response {
  global $spec_function;

  $res = $spec_function[SPEC::String]($str);
  if (!$res->status) return $res;

  if (!filter_var($str, FILTER_VALIDATE_EMAIL)) {
    $res->status = false;
    $res->error = 'Inserisci un\'email valida';
  }

  return $res;
};

/**
 * Used as a response to the `check` function defined below.
 */
class CheckResponse {
  public bool $status;
  public array $error;

  public function __construct() {
    $this->status = true;
    $this->error = [];
  }

  public function add_error(string $key, string $value): void {
    $this->status = false;
    $this->error[$key] = $value;
  }
}

/**
 * Automatically checks the validity of the inputs by using
 * the functions defined earlier in this file.
 *  
 * This function expects an array $source and an array $spec
 * defined in the following way:
 *
 * $source = [
 *   <name> => <value>
 *   ...
 * ]
 *
 * $spec = [
 *  <name> => SPEC[],
 *   ...
 * ]
 *
 * @param array $source
 * @param array $spec
 * @return Response
 * @throws ValueError
 */
function check(array $source, array $spec): CheckResponse {
  global $spec_function;

  $res = new CheckResponse();

  foreach ($spec as $name => $reqs) {
    if (!isset($source[$name])) {
      if (in_array(SPEC::Required, $reqs)) {
        $res->add_error($name, 'Inserisci un valore');
      }

      continue;
    }

    foreach ($reqs as $req) {
      if ($req == SPEC::Required) continue;
      if (!array_key_exists($req, $spec_function)) {
        throw new ValueError(); 
      }

      $tmp = $spec_function[$req]($source[$name]);
      
      if (!$tmp->status) {
        $res->add_error($name, $tmp->error);
        break;
      }
    }
  }

  return $res;
}

<?php
namespace Utils;

require_once 'lib/vendor/autoload.php';
\Dotenv\Dotenv::createImmutable(__DIR__ . '/..')->load();

$_ENV['DEBUG'] = filter_var($_ENV['DEBUG'], FILTER_VALIDATE_BOOLEAN);

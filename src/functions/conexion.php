function conect(){
  $dsn = "sqlsrv:Server={$_ENV['DB_HOST']};Database={$_ENV['DB_NAME']}";
  $username = $_ENV['DB_USERNAME'] ?? NULL;
  $password = $_ENV['DB_PASSWORD'] ?? NULL;

  $conn = new PDO($dsn, $username, $password);

  if ($conn === false) {
    echo "Unable to connect.</br>";
    die(print_r(sqlsrv_errors(), true));
  }

  return $conn;
}
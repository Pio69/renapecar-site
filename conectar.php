<?php
// Configure estas variáveis no ambiente; não registre credenciais no Git.
$servername = getenv('DB_HOST');
$database = getenv('DB_NAME');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');

if ($servername === false || $servername === '' || $database === false || $database === '' ||
    $username === false || $username === '' || $password === false) {
    http_response_code(500);
    exit('Configure DB_HOST, DB_NAME, DB_USER e DB_PASSWORD no ambiente.');
}

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    http_response_code(500);
    exit('Falha na conexão com o banco de dados.');
}
$conn->set_charset('utf8');

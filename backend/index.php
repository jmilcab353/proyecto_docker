<?php
// Permitir solicitudes desde cualquier origen
header("Access-Control-Allow-Origin: *");
// Permitir los métodos que quieres permitir
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
// Permitir los encabezados que quieres permitir
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$host = 'sql';
$db = 'exampledb';
$user = 'root';
$password = 'root';

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query('SELECT * FROM productos');
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');
    echo json_encode($data);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}

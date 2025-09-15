<?php
header('Content-Type: application/json; charset=utf-8');

$input = file_get_contents('php://input');
$data = json_decode($input, true);

$username = $data['username'] ?? '';
$password = $data['password'] ?? '';

if (!is_string($username) || strlen($username) < 3) {
  echo json_encode(['ok'=>false, 'error'=>'Usuario inválido']); exit;
}
if (!is_string($password) || strlen($password) < 6) {
  echo json_encode(['ok'=>false, 'error'=>'Contraseña inválida']); exit;
}

echo json_encode(['ok'=>true]);

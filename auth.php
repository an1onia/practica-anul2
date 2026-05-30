<?php
session_start();
header('Content-Type: application/json; charset=utf-8');

$action = $_POST['action'] ?? '';
$storage = 'user.json';

if (!file_exists($storage)) {
    file_put_contents($storage, json_encode([]));
}
$users = json_decode(file_get_contents($storage), true);
if (!is_array($users)) $users = [];

if ($action === 'register') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($username === '' || $password === '') {
        echo json_encode(['success'=>false, 'error'=>'Completați toate câmpurile.']);
        exit;
    }

    foreach ($users as $u) {
        if ($u['username'] === $username) {
            echo json_encode(['success'=>false, 'error'=>'Utilizatorul există deja.']);
            exit;
        }
    }

    $users[] = [
        'username' => $username,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ];
    file_put_contents($storage, json_encode($users, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    echo json_encode(['success'=>true, 'message'=>'Înregistrare reușită!']);
    exit;
}

if ($action === 'login') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    foreach ($users as $u) {
        if ($u['username'] === $username && password_verify($password, $u['password'])) {
            $_SESSION['user'] = $username;
            echo json_encode(['success'=>true, 'message'=>'Autentificare reușită!']);
            exit;
        }
    }
    echo json_encode(['success'=>false, 'error'=>'Utilizator sau parolă incorectă.']);
    exit;
}

echo json_encode(['success'=>false, 'error'=>'Acțiune necunoscută.']);

<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autentificare — Личный дневник эмоций</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-page">
        <div class="auth-card">
            <h2>Bine ai venit înapoi</h2>
            <p class="auth-subtitle">Autentifică-te pentru a continua</p>
            <form id="loginForm">
                <div class="form-group">
                    <label for="login-username">Utilizator</label>
                    <input type="text" id="login-username" name="username" required placeholder="nume_utilizator">
                </div>
                <div class="form-group">
                    <label for="login-password">Parolă</label>
                    <input type="password" id="login-password" name="password" required placeholder="••••••••">
                </div>
                <button type="submit" class="auth-btn">Autentificare</button>
                <p class="auth-switch">Nu ai cont? <a href="register.php">Înregistrează-te</a></p>
                <p class="auth-message" id="loginMessage"></p>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

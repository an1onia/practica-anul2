<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Înregistrare — Личный дневник эмоций</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-page">
        <div class="auth-card">
            <h2>Creează un cont</h2>
            <p class="auth-subtitle">Înregistrează-te pentru a-ți păstra emoțiile</p>
            <form id="registerForm">
                <div class="form-group">
                    <label for="reg-username">Utilizator</label>
                    <input type="text" id="reg-username" name="username" required placeholder="alege un nume">
                </div>
                <div class="form-group">
                    <label for="reg-password">Parolă</label>
                    <input type="password" id="reg-password" name="password" required placeholder="••••••••">
                </div>
                <button type="submit" class="auth-btn">Înregistrare</button>
                <p class="auth-switch">Ai deja cont? <a href="login.php">Autentificare</a></p>
                <p class="auth-message" id="registerMessage"></p>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
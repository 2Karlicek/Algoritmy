<?php
session_start();

if(isset($_SESSION['username'])) {
    // Pokud je uživatel již přihlášen, přesměruj ho na hlavní stránku
    header("Location: index.php");
    exit;
}

include('login_functions.php'); // Soubor s funkcemi pro přihlášení

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

   registerUser($username, $password);
    
    }
    ?>
    
    <!DOCTYPE html>
    <html>
    <head>
        <title>Registrace</title>
    </head>
    <body>
    <h2>Registrace</h2>
    <form method="post" action="registrace.php">
        <div>
            <label for="username">Uživatelské jméno:</label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label for="password">Heslo:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <button type="submit" name="register">Registrovat</button>
        </div>
        <div>
            <a href="1.php">Login</a>
        </div>
    </form>
    <?php
    if(isset($error_message)) {
        echo "<p>$error_message</p>";
    }
    ?>
    </body>
    </html>

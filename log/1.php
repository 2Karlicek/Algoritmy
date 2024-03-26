<?php
session_start();

if(isset($_SESSION['username'])) {
    // Pokud je uživatel přihlášen, přesměruj ho na hlavní stránku
    
}

include('login_functions.php'); // Soubor s funkcemi pro přihlášení

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    loginUser($username, $password);
    
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Přihlášení</title>
</head>
<body>

<h2>Přihlášení</h2>
<form method="post" action="1.php">
    <div>
        <label for="username">Uživatelské jméno:</label>
        <input type="text" name="username" required>
    </div>
    <div>
        <label for="password">Heslo:</label>
        <input type="password" name="password" required>
    </div>
    <div>
        <button type="submit" name="login">Přihlásit</button>
    </div>
    <div>
        <a href="2.php">Registrace</a>
    </div>

</form>

<?php
if(isset($error_message)) {
    echo "<p>$error_message</p>";
}
?>

</body>
</html>

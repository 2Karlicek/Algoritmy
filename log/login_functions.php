<?php
// Připojení k databázi
$db_host = 'dbs.spskladno.cz';
$db_username = 'student12';
$db_password = 'spsnet';
$db_name = 'vyuka12';

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Kontrola připojení
if ($conn->connect_error) {
    die("Chyba připojení k databázi: " . $conn->connect_error);
}

// Funkce pro registraci uživatele
function registerUser($username, $password) {
    global $conn;
    $email = "sps@seznam.cz";
    $isadmin = 0;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO cotp(username, email ,password, isadmin) VALUES('$username','$email', '$password', '$isadmin')";
    
    
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("bad");
    }
    
}

// Funkce pro přihlášení uživatele
function loginUser($username, $password) {
    global $conn;
    
    // Nezavírat připojení zde
    
    $sql = "SELECT * FROM cotp WHERE username='$username'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (($password == $user['password'])) {
            $_SESSION['username'] = $username;
            echo "gut";
            
        }
        else{
            echo "bad";
        }
    }
    return false;
}

// Funkce pro odhlášení uživatele
function logoutUser() {
    session_destroy();
    header("Location: login.php"); // Přesměrování na přihlašovací stránku
    exit;
}

// Není potřeba uzavírat připojení zde

?>

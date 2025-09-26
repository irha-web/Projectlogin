<?php
session_start();
// proses login saat Form dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
     $password = $_POST['password'] ?? '';
    
     // Login sederhana (username: admin, password: 123)
     if ($username === 'admin' && $password === '123') {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'Siswa';
        header("Location: dasboard.php");
        exit;
     } else {
    $error = "Username atau password salah!";

     }
     }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
</head>
<body>
    <h2>Form Login</h2>

    <Form method="post">
        username: <input type="text" name="username" required><br><br>
        password: <input type="text" name="password" required><br><br>
        <button type="submit">Login</button>
</form>
</body>
</html>  
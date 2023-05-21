<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "latihan";

    $koneksi = mysqli_connect($host, $username, $password, $database);

    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    }

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $passworduser = $_POST['password'];
    
        // Query to fetch data from the database
        $query = "SELECT * FROM login WHERE username='$username' AND password='$passworduser'";
        $result = mysqli_query($koneksi, $query);
    
        if ($result->num_rows == 1) {
            // Login berhasil, redirect ke program form peserta pendidikan
            header('Location: formpd1.php');
            exit;
        } else {
            // Login gagal
            echo "<script>alert('Email atau password salah.');
                          window.location.href = 'index.php'; 
                </script>";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "stylesheet" href = "index.css">
    <title>Login</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="POST">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email" name="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password">

        <button type="submit" name = "submit" value="login">Log In</button>
    </form>
</body>
</html>
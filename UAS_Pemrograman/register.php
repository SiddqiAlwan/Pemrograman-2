<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password != $confirm_password) {
        echo "Passwords do not match.";
    } else {
        // Menggunakan prepared statements untuk menghindari SQL injection
        $stmt = $conn->prepare("SELECT * FROM users WHERE nim = ?");
        $stmt->bind_param("s", $nim);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "User already exists.";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (nim, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $nim, $hashed_password);

            if ($stmt->execute()) {
                echo "Registration successful.";
                // Redirect to login page or another page
                header("Location: login.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <form method="post" action="">
        NIM: <input type="text" name="nim" required><br>
        Password: <input type="password" name="password" required><br>
        Confirm Password: <input type="password" name="confirm_password" required><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>

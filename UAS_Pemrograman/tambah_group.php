<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['nim'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $group_name = $conn->real_escape_string($_POST['group_name']);

    $sql = "INSERT INTO groups (group_name) VALUES ('$group_name')";
    if ($conn->query($sql) === TRUE) {
        echo "New group created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Group</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #333;
        }
        form {
            margin: 20px 0;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }
        button {
            background-color: #50b3a2;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #3d9c91;
        }
        .back-btn {
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add Group</h1>
        <form method="post" action="">
            <input type="text" name="group_name" placeholder="Group Name" required><br>
            <button type="submit">Add Group</button>
        </form>
        <form action="index.php" class="back-btn">
            <button type="submit">Back</button>
        </form>
    </div>
</body>
</html>

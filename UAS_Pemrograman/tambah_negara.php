<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['nim'])) {
    header("Location: login.php");
    exit();
}

$groups = $conn->query("SELECT * FROM groups");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $group_id = $conn->real_escape_string($_POST['groups_id']);
    $country_name = $conn->real_escape_string($_POST['nama_negara']);
    $wins = $conn->real_escape_string($_POST['menang']);
    $draws = $conn->real_escape_string($_POST['draw']);
    $losses = $conn->real_escape_string($_POST['kalah']);
    $points = $conn->real_escape_string($_POST['points']);

    $sql = "INSERT INTO negara (groups_id, nama_negara, menang, draw, kalah, points) VALUES ('$group_id', '$country_name', '$wins', '$draws', '$losses', '$points')";
    if ($conn->query($sql) === TRUE) {
        echo "New country added successfully";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Country</title>
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
        input[type="text"], input[type="number"], select {
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
        <h1>Add Country</h1>
        <form method="post" action="">
            Group:
            <select name="groups_id" required>
                <?php while ($row = $groups->fetch_assoc()): ?>
                    <option value="<?php echo htmlspecialchars($row['id']); ?>"><?php echo htmlspecialchars($row['group_name']); ?></option>
                <?php endwhile; ?>
            </select><br>
            Country Name: <input type="text" name="nama_negara" required><br>
            Wins: <input type="number" name="menang" required><br>
            Draws: <input type="number" name="draw" required><br>
            Losses: <input type="number" name="kalah" required><br>
            Points: <input type="number" name="points" required><br>
            <button type="submit">Add Country</button>
        </form>
        <form action="index.php" class="back-btn">
            <button type="submit">Back</button>
        </form>
    </div>
</body>
</html>

<?php
session_start();
include "koneksi.php";

// Cek apakah koneksi berhasil
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['nim'])) {
    header("Location: login.php");
    exit();
}

// Mengambil data dari database dengan JOIN dan urutkan berdasarkan poin
$countries = $conn->query("SELECT negara.*, groups.group_name FROM negara JOIN groups ON negara.groups_id = groups.id ORDER BY negara.points DESC");
if (!$countries) {
    die("Query Error: " . $conn->error);
}

// Menghapus data berdasarkan ID
if (isset($_GET['delete'])) {
    $id = $conn->real_escape_string($_GET['delete']);
    $stmt = $conn->prepare("DELETE FROM negara WHERE id=?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record: " . $stmt->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #50b3a2;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: #50b3a2;
            margin: 0 10px;
        }
        a:hover {
            text-decoration: underline;
        }
        .logout {
            display: inline-block;
            margin-top: 20px;
            background: #50b3a2;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .logout:hover {
            background: #3d9c91;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['nim']); ?></h1>
        <a href="tambah_group.php">Tambah Group</a>
        <a href="tambah_negara.php">Tambah Negara</a>
        <a href="pdf.php">Cetak PDF</a>
        <table>
            <tr>
                <th>Group</th>
                <th>Negara</th>
                <th>Wins</th>
                <th>Draws</th>
                <th>Losses</th>
                <th>Points</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = $countries->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['group_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['nama_negara']); ?></td>
                    <td><?php echo htmlspecialchars($row['menang']); ?></td>
                    <td><?php echo htmlspecialchars($row['draw']); ?></td>
                    <td><?php echo htmlspecialchars($row['kalah']); ?></td>
                    <td><?php echo htmlspecialchars($row['points']); ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo htmlspecialchars($row['id']); ?>">Edit</a>
                        <a href="?delete=<?php echo htmlspecialchars($row['id']); ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
        <a href="logout.php" class="logout">Logout</a>
    </div>
</body>
</html>

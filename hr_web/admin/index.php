<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit;
}

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'hr_db';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle user level update
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = intval($_POST['user_id']);
    $level = $_POST['level'];
    
    $stmt = $conn->prepare("UPDATE users SET level = ? WHERE id = ?");
    $stmt->bind_param("si", $level, $user_id);
    $stmt->execute();
    $stmt->close();
}

// Fetch all users
$result = $conn->query("SELECT id, name, email, level FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - User Management</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #4CAF50; color: white; }
        .btn { padding: 8px 12px; cursor: pointer; }
        .active { background-color: #4CAF50; color: white; }
        .inactive { background-color: #f44336; color: white; }
    </style>
</head>
<body>

<h1>User Level Management</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Level</th>
        <th>Action</th>
    </tr>
    <?php
    while ($row = $result->fetch_assoc()) {
        $status = ($row['level'] != 'deactive') ? 'active' : 'inactive';
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="user_id" value="<?= $row['id'] ?>">
                    <select name="level" onchange="this.form.submit()">
                        <option value="level1" <?= ($row['level'] == 'level1') ? 'selected' : '' ?>>Level 1</option>
                        <option value="level2" <?= ($row['level'] == 'level2') ? 'selected' : '' ?>>Level 2</option>
                        <option value="deactive" <?= ($row['level'] == 'deactive') ? 'selected' : '' ?>>Deactive</option>
                    </select>
                </form>
            </td>
            <td><span class="btn <?= $status ?>"><?= ucfirst($status) ?></span></td>
        </tr>
        <?php
    }
    ?>
</table>

</body>
</html>

<?php $conn->close(); ?>
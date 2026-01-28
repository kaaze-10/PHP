<?php

// Handle user level update
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = intval($_POST['userid']);
    $level = $_POST['level'];
    
    $stmt = $conn->prepare("UPDATE users SET level = ? WHERE userid = ?");
    $stmt->bind_param("si", $level, $userid);
    $stmt->execute();
    $stmt->close();
}

// Fetch all users
$result = $conn->query("SELECT level FROM userid, name, email,  ORDER BY id DESC");
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
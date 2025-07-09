<?php include 'db.php'; ?>
<h1>Bug Tracker</h1>

<!-- Submit Bug -->
<h3>Submit a Bug</h3>
<form action="submit_bug.php" method="post">
    <input type="text" name="title" required>
    <textarea name="description" required></textarea>
    <button type="submit">Report</button>
</form>

<!-- Bug List -->
<h3>All Bugs</h3>
<ul>
<?php
$res = $conn->query("SELECT * FROM bugs ORDER BY created_at DESC");
while ($bug = $res->fetch_assoc()) {
    echo "<li>
        <strong>{$bug['title']}</strong> ({$bug['status']})<br>
        {$bug['description']}<br>
        <form style='display:inline' action='update_status.php' method='post'>
            <input type='hidden' name='id' value='{$bug['id']}'>
            <select name='status'>
                <option>Open</option>
                <option>In Progress</option>
                <option>Resolved</option>
            </select>
            <button type='submit'>Update</button>
        </form>
        <form style='display:inline' action='delete_bug.php' method='post'>
            <input type='hidden' name='id' value='{$bug['id']}'>
            <button type='submit'>Delete</button>
        </form>
    </li><hr>";
}
?>
</ul>

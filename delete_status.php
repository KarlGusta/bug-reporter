<?php
include 'db.php';
$id = $_POST['id'];
$conn->query("DELETE FROM bugs WHERE id = $id");
header("Location: index.php");

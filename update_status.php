<?php
include 'db.php';
$id = $_POST['id'];
$status = $_POST['status'];
$conn->query("UPDATE bugs SET status = '$status' WHERE id = $id");
header("Location: index.php");

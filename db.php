<?php
$conn = new mysqli("localhost", "root", "", "bug_reports");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
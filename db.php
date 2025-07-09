<?php
$conn = new mysqli("localhost", "root", "", "currency_converter");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
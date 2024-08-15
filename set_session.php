<?php
session_start();
$data = json_decode(file_get_contents('php://input'), true);
if (isset($data['username'])) {
    $_SESSION['username'] = $data['username'];
}
?>
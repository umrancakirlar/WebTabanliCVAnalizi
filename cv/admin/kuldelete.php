<?php
require_once("../db.php");

$sql = $conn->prepare("DELETE  FROM users WHERE id=?");
$sql->bind_param("i", $_GET["id"]);
$sql->execute();
$sql->close();
$conn->close();
header('location:kullanıcıhesap.php');
?>
<?php 
	include ('MyToDoDB.php');

	session_start();
	$_SESSION['Email'] = $_POST['newEmail'];
	$_SESSION['Password'] = $_POST['newPassword'];

	$db = new MyToDoDB();
	$sql = $db->prepare('INSERT INTO Users(email, password) VALUES (?, ?)');
	$sql->bindValue(1, $_SESSION['Email']);
	$sql->bindValue(2, $_SESSION['Password']);
	$sql->execute();
	$db->close();

	require 'getId.php';
?>
<?php 
	include ('MyToDoDB.php');
	session_start();

	$db = new MyToDoDB();
	$sql = $db->prepare('INSERT INTO Tasks(title, date, description, user, done) VALUES (?, ?, ? ,?, 0)');
	$sql->bindValue(1, $_POST['Title']);
	$sql->bindValue(2, $_POST['Date']);
	$sql->bindValue(3, $_POST['Description']);
	$sql->bindValue(4, $_SESSION['ID']);
	$sql->execute();
	$db->close();

	require 'List.php';
?>
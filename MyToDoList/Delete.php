<?php  
	include ('MyToDoDB.php');

	$id = $_GET['id'];

	$db = new MyToDoDB();
	$sql = $db->prepare('DELETE FROM Tasks WHERE idTask = ?');
	$sql->bindValue(1, $id);
	$ret = $sql->execute();
	$db->close();

	require 'List.php';
?>
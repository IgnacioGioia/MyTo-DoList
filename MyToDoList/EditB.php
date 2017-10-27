<?php  
	include ('MyToDoDB.php');

	$id = $_GET['id'];
	$title = $_POST['Title'];
	$date = $_POST['Date'];
	$description = $_POST['Description'];

	$db = new MyToDoDB();
	$sql = $db->prepare('UPDATE Tasks SET title=?,date=?,description=? WHERE idTask = ?');
	$sql->bindValue(1, $title);
	$sql->bindValue(2, $date);
	$sql->bindValue(3, $description);
	$sql->bindValue(4, $id);
	$ret = $sql->execute();
	$db->close();

	require 'List.php';
?>
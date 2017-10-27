<?php
	include 'Task.php';
	session_start();

	$db = new MyToDoDB();
	$sql = $db->prepare('SELECT (idTask),(title),(date),(description),(done) FROM Tasks WHERE user = ? AND done = 0');
	$sql->bindValue(1, $_SESSION['ID']);
	$ret = $sql->execute();
	while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
		$list[] = new Task($row['idTask'], $row['title'], $row['date'], $row['description'], $row['done']);
	}
	$db->close();
	require 'ViewTasks.php';
?>
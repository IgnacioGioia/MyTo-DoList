<?php
	$db = new MyToDoDB();
	$sql = $db->prepare('SELECT (idUser) FROM Users WHERE email = ? LIMIT 1');
	$sql->bindValue(1, $_SESSION['Email']);
	$ret = $sql->execute();
	//$ret = $db->query($sql);
	while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
		$id = $row['idUser'];
	}
	$db->close();
	$_SESSION['ID'] = $id;
	require 'List.php';
?>
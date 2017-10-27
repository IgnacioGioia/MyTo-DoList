<?php  
	include ('MyToDoDB.php');

	session_start();
	$_SESSION['Email'] = $_POST['Email'];
	$_SESSION['Password'] = $_POST['Password'];

	$db = new MyToDoDB();
	$sql = $db->prepare('SELECT (email),(password) FROM Users WHERE email = ?');
	$sql->bindValue(1, $_SESSION['Email']);
	$ret = $sql->execute();
	//$ret = $db->query($sql);
	while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
		$em = $row['email'];
	    $pw = $row['password'];
	}
	$db->close();
	if($em == NULL){
		require 'index.php';
	}
	else if($_SESSION['Password'] != $pw){
		require 'index.php';
	}
	else{

		require 'getId.php';
	}
?>
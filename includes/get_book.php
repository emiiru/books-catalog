<?php
	require_once('database.php');
	$id = $_GET['id'];
	$res = $database->read($id);
	$row = mysqli_fetch_assoc($res);
	$array[] = [
		'id' => $row['id'],
		'title' => $row['title'],
		'isbn' => $row['isbn'],
		'author' => $row['author'],
		'publisher' => $row['publisher'],
		'published_year' => $row['published_year'],
		'category' => $row['category']
	];
	echo json_encode($array);
?>
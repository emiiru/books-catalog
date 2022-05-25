<?php
 if(isset($_POST) & !empty($_POST)){
    require_once('database.php');
	$id = $database->sanitize($_POST['id']);
	$title = $database->sanitize($_POST['title']);
	$isbn = $database->sanitize($_POST['isbn']);
	$author = $database->sanitize($_POST['author']);
	$publisher = $database->sanitize($_POST['publisher']);
	$year = $database->sanitize($_POST['year']);
	$category = $database->sanitize($_POST['category']);

	$res = $database->update($id,$title, $isbn, $author, $publisher, $year, $category);
    $status = ($res ? 'success' : 'failed');
    echo json_encode(['status' => $status]);
}
?>
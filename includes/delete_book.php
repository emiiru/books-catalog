<?php
 if(isset($_GET) & !empty($_GET)){
    require_once('database.php');
	$id = $database->sanitize($_GET['id']);

	$res = $database->delete($id);
    $status = ($res ? 'success' : 'failed');
    echo json_encode(['status' => $status]);
}
?>
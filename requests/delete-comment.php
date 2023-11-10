<?php 
require_once('../config/database.php');
require_once('../config/classes.php');

if($_POST) {
	$data = $_POST;
    $comment = new Comment();
    
    $result = $comment->deleteComment($data);
    echo json_encode($result);
}
?>
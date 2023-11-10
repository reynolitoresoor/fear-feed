<?php 
require_once('../config/database.php');
require_once('../config/classes.php');

if($_POST) {
	$data = $_POST;
    $comment = new Comment();
    
    $result = $comment->editComment($data);
    if($result) {
       $result = $comment->getCommentById($data['comment_id']);
       echo json_encode($result);
    }
}
?>
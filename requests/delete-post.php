<?php 
require_once('../config/database.php');
require_once('../config/classes.php');

if($_POST) {
	$data = $_POST;
    $post = new Post();
    
    $result = $post->deletePost($data);
    echo json_encode($result);
}
?>
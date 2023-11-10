<?php 
require_once('../config/database.php');
require_once('../config/classes.php');

if($_POST) {
	$data = $_POST;
    $post = new Post();
    
    $result = $post->updatePost($data);
    echo json_encode($result);
}
?>
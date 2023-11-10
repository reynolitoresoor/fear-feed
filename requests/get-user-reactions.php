<?php 
require_once('../config/database.php');
require_once('../config/classes.php');

if($_POST) {
	$data = $_POST;
    $reacts = new React();
    $user_id = intval($data['user_id']);
    
    $result = $reacts->getUserReactions($user_id);
    echo json_encode($result);
}
?>
<?php 
require_once('../config/database.php');
require_once('../config/classes.php');

if($_POST) {
	$data = $_POST;
    $user = new User();
    
    $result = $user->getUserFriends($data['user_id']);
    echo json_encode($result);
}
?>
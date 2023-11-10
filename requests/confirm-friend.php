<?php 
require_once('../config/database.php');
require_once('../config/classes.php');

if($_POST) {
	$data = $_POST;
    $user = new User();
    
    $result = $user->confirmFriend($data);
    if($result) {
        $result = $user->getUserConfirmedFriends($data['user_id']);
        echo json_encode($result);
    }
}
?>
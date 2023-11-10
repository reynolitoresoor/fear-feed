<?php 
require_once('../config/database.php');
require_once('../config/classes.php');

if($_POST) {
	$data = $_POST;
    $user = new User();
    $toHTML = "";
    $result = $user->searchUser($data);

    return $result;
}
?>
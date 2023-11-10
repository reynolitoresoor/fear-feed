<?php 
require_once('../config/database.php');
require_once('../config/classes.php');

if($_POST) {
	$data = $_POST;
    $react = new React();

    if($data['type'] == 'like') {
        $result = $react->like($data);
        echo json_encode(strtolower($result));
    } else {
        $result = $react->dislike($data);
        echo json_encode(strtolower($result));
    }
}
?>
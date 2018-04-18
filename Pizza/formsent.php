<?php
if($_POST['submit'] == 1){
	$json_array = json_decode(file_get_contents('http://localhost/Pizza/order.json'), true);
	$json_array[] = array('name' => $_POST['name'], 'email' => $_POST['email'], 'phone' => $_POST['phone'], 'address' => $_POST['address'], 'size' => $_POST['size'], 'type' => $_POST['type'], 'top_1' => $_POST['top_1'], 'top_2' => $_POST['top_2'], 'top_3' => $_POST['top_3']);
	//print_r($json_array);
	file_put_contents($_SERVER["DOCUMENT_ROOT"].'/Pizza/order.json', json_encode($json_array));
}

?>
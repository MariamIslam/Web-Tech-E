<?php
require_once '../Model.php';

if(isset($_POST['saveProduct'])){
	$data['name'] = $_POST['name'];
	$data['sprice'] = $_POST['sprice'];
	$data['bprice'] = $_POST['bprice'];
	
	if(isset($_POST['display']))
	{
		$data['dis'] = $_POST['display'];
	}
	else{
		$data['dis'] = "No";
	}

	if(addProduct($data))
	{
		echo "Product successfully saved!";
	}
}
else{
	echo "Please try again!";
}
?>
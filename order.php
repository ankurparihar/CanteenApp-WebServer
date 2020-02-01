<?php
	if(isset($_POST["data"])){
		$new_order = json_decode($_POST["data"]);
		$file = fopen("orders.json", "r+");
		$orders = json_decode(fread($file, filesize("orders.json")));
		fclose($file);
		array_push($orders, $new_order);
		file_put_contents("orders.json", json_encode($orders));
	}else{
		echo "Error";
	}
?>
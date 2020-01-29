<?php
	if(isset($_GET["data"])){
		$order_list = json_decode($_GET["data"]);
		echo sizeof($order_list);
	}else{
		echo "Error";
	}
?>
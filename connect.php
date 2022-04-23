<?php
	$item = $_POST['item'];
	$remark = $_POST['remark'];
    $shop = $_POST["shop"];

	// Database connection
	$conn = new mysqli('localhost','root','','vasant2');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into vasant2(item, shop, remark) values(?, ?, ?)");
		$stmt->bind_param("sss", $item, $shop, $remark);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
<?php
	$item = $_POST['item'];
	$shop = $_POST['shop'];
    $remark = $_POST['remark'];

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
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        input[type=text], select {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        
        input[type=submit] {
          width: 100%;
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
        
        input[type=submit]:hover {
          background-color: #45a049;
        }
        
        div {
          border-radius: 5px;
          background-color: #f2f2f2;
          padding: 20px;
        }
        </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Page</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
        <h1>LocalToGlobal</h1>
    </header>
        <section>
            <h2>Enter Your Review Below</h2>
        </section>
    <main>
        <form action="reviewpage.php" method="post">
            <label for="item">Enter Item Name:*</label><br>
            <input type="text" id="item" name="item"><br>
            <label for="shop">Enter Shop Name:*</label><br>
            <input type="text" id="shop" name="shop"><br><br>
            <label for="remark">Enter Remark:*</label><br>
            <input type="text" id="remark" name="remark"><br><br>
            <button type="submit">Submit</button><br><br>
        </form>
            <h3>    Our Founders
            </h3>
            <h3>VASANT KUMAR SHARMA | TUSHAR GOYAL | SNEHASHISH DUTTA</h3>
            <h4>UNDER MAINTENANCE</h4>
            <h5>UNDER MAINTENANCE</h5>
        </section>
    </main>

    <footer>
        <a href="#">FAQ</a>
        <a href="#">Contact Us</a>
        <a href="#">Terms of Use</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Refund Policy</a>
        <a href="#">&copy; 2022 | WEB_CODERZ</a>
    </footer>
</body>
</html>
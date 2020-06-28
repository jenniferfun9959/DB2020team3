<?php

// ******** update your personal settings ******** 
$servername = "140.122.184.132";
$username = "team3";
$password = "DBBkRHAi8c7FbI9";
$dbname = "team3";

// Connecting to and selecting a MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $conn->error);
    exit();
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_POST['cus_phone']) && isset($_POST['cus_name']) && isset($_POST['cus_email'])&& isset($_POST['cus_password'])) {
	//$cus_ID = $_POST['cus_ID'];
	$cus_phone = $_POST['cus_phone'];
	$cus_name = $_POST['cus_name'];
	$cus_email = $_POST['cus_email'];
	$cus_password = $_POST['cus_password'];

	$cus_ID=rand(1,9999999999999999);

	$insert_sql = "INSERT INTO `customerData`(`customer_ID`,`customer_phone`,`customer_name`,`customer_email`,`customer_password`) VALUES ('$cus_ID','$cus_phone','$cus_name','$cus_email','$cus_password')";
	//$insert_sql = "INSERT INTO customerData(customer_ID,customer_phone,customer_name,customer_email,customer_password) VALUES ('444','44444444','4444','4444','4444')";

	if ($conn->query($insert_sql) === TRUE) {
		echo "新增成功!!<br> 您的帳號是$cus_ID <br><a href='customer.html'>進入會員頁面</a>";
	} else {
		echo "<h2 align='center'><font color='antiquewith'>新增失敗!!</font></h2>";
	}

}else{
	echo "資料不完全";
}
				
?>


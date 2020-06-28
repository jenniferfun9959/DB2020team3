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

// 旅館 日期 房型 // 
if (isset($_POST['ID']) && isset($_POST['date']) && isset($_POST['typeofroom_ID']) && isset($_POST['cus_ID'])) {
	$ID = $_POST['ID'];  //hotelID
	$date = $_POST['date'];
	$typeofroom_ID = $_POST['typeofroom_ID'];
	$cus_ID = $_POST['cus_ID'];

	$order_ID=rand(1,99999999);

	$insert_sql = "INSERT INTO `order`(`order_ID`,`order_date`,`customer_ID`,`ID`,`typeofroom_ID`,`date`) VALUES ('$order_ID','$date','$cus_ID','$ID','$typeofroom_ID','$date')  ";
	
		if ($conn->query($insert_sql) === TRUE) {
			echo "新增成功!!<br> <a href='customer.html'>返回主頁</a>";
		} else {
			echo "<h2 align='center'><font color='antiquewith'>新增失敗!!您新增的房型不存在或超過20200701~20200705區間！</font></h2>";
		}
	
		}



	else{
		echo "資料不完全";
	}



	
				
?>


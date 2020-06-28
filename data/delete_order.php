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

$order_ID = $_POST['order_ID'];

if (isset($order_ID)) {
    $delete_sql = " DELETE FROM `order` WHERE `order_ID` = '$order_ID' ";

	if ($conn->query($delete_sql) === TRUE) {
        echo "刪除成功!<a href='./customer.html'>返回主頁</a>";
    }else{
        echo "刪除失敗!";
	}

}else{
	echo "資料不完全";
}

?>
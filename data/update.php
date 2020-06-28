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

if (isset($_POST['order_ID']) && isset($_POST['ID']) && isset($_POST['date']) && isset($_POST['typeofroom_ID']) && isset($_POST['cus_ID'])) {
	$order_ID = $_POST['order_ID'];
	$ID = $_POST['ID'];
	$date = $_POST['date'];
	$typeofroom_ID = $_POST['typeofroom_ID'];
	//$cus_ID = $_POST['cus_ID'];

	$update_sql = "UPDATE order SET ID=$ID, SET date=$date, SET typeofroom_ID=$typeofroom_ID WHERE order_ID=$order_ID";	// ******** update your personal settings ******** 


	if ($conn->query($update_sql) === TRUE) {
		echo "修改成功!!<br> <a href='main.php'>返回主頁</a>";
	} else {
		echo "<h2 align='center'><font color='antiquewith'>修改失敗!!</font></h2>";
	}

}else{
	echo "資料不完全";
}
				
?>
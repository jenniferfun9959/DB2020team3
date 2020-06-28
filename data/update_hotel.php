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

if (isset(isset($_POST['typeofroom_ID']) && ($_POST['total_room']) && isset($_POST['price']))) {
	$typeofroom_ID = $_POST['typeofroom_ID'];
	$total_room = $_POST['total_room'];
	$price = $_POST['price'];

	$update_sql = "UPDATE typeofroom SET total_room=$total_room, SET price=$price WHERE typeofroom_ID=$typeofroom_ID";	// ******** update your personal settings ******** 


	if ($conn->query($update_sql) === TRUE) {
		echo "修改成功!!<br> <a href='main.php'>返回主頁</a>";
	} else {
		echo "<h2 align='center'><font color='antiquewith'>修改失敗!!</font></h2>";
	}

}else{
	echo "資料不完全";
}
				
?>
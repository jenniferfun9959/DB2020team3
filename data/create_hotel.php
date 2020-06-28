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

if (isset($_POST['ID']) && isset($_POST['typeofroom_ID']) && isset($_POST['total_room']) && isset($_POST['price'])) {
	$ID = $_POST['ID'];  //hotelID
	$typeofroom_ID = $_POST['typeofroom_ID'];
	$total_room = $_POST['total_room'];
	$price = $_POST['price'];


	$insert_sql = "INSERT INTO `typeofroom`(`ID`,`typeofroom_ID`,`total_room`,`price`) VALUES ('$ID','$typeofroom_ID','$total_room','$price')  ";
	$insert_sql1 = "INSERT INTO `occupied_room`(`ID`,`typeofroom_ID`,`date`,`surplus_room`) VALUES ('$ID','$typeofroom_ID','20200701','$total_room')  ";
	$insert_sql2 = "INSERT INTO `occupied_room`(`ID`,`typeofroom_ID`,`date`,`surplus_room`) VALUES ('$ID','$typeofroom_ID','20200702','$total_room')  ";
	$insert_sql3 = "INSERT INTO `occupied_room`(`ID`,`typeofroom_ID`,`date`,`surplus_room`) VALUES ('$ID','$typeofroom_ID','20200703','$total_room')  ";
	$insert_sql4 = "INSERT INTO `occupied_room`(`ID`,`typeofroom_ID`,`date`,`surplus_room`) VALUES ('$ID','$typeofroom_ID','20200704','$total_room')  ";
	$insert_sql5 = "INSERT INTO `occupied_room`(`ID`,`typeofroom_ID`,`date`,`surplus_room`) VALUES ('$ID','$typeofroom_ID','20200705','$total_room')  ";

		if ($conn->query($insert_sql) && $conn->query($insert_sql1) && $conn->query($insert_sql2) && $conn->query($insert_sql3) && $conn->query($insert_sql4) && $conn->query($insert_sql5)=== TRUE) {
			echo "新增成功!!<br> <a href='hotel.html'>返回主頁</a>";
		} else {
			echo "<h2 align='center'><font color='antiquewith'>新增失敗!!</font></h2>";
		}
	
		}



	else{
		echo "資料不完全";
	}



	
				
?>


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

$ID = $_POST['ID'];
$typeofroom_ID = $_POST['typeofroom_ID'];

if (isset($ID) && isset($typeofroom_ID)) {
    $delete_sql = " DELETE FROM `occupied_room` WHERE `ID` = '$ID' AND `typeofroom_ID`='$typeofroom_ID'";
    $delete_sql2 = " DELETE FROM `typeofroom` WHERE `ID` = '$ID' AND `typeofroom_ID`='$typeofroom_ID'";

	if ($conn->query($delete_sql) && $conn->query($delete_sql2) === TRUE) {
        echo "刪除成功!<a href='./hotel.html'>返回主頁</a>";
    }else{
        echo "刪除失敗!<br> 可能原因：您要刪除的房型有人訂了，請勿刪除。或此房型不存在。";
	}

}else{
	echo "資料不完全";
}

?>
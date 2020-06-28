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


if (isset($_POST['city'])) {
	$city = $_POST['city'];
	
	
	$insert_sql = "SELECT * FROM `hostel` NATURAL JOIN `typeofroom` WHERE `city`='$city'";
	//$insert_sql2 = "";

	$result = mysqli_query($conn , $insert_sql);
	//$result2 = mysqli_query($conn , $insert_sql2);

	echo "旅館名稱 / 旅館電話 / 所在城市 / 地址 / 房型 / 剩餘數量 / 金額 <br><br>";

	while ( $row = mysqli_fetch_array ( $result, MYSQLI_NUM ) ) {
		echo $row['0'].' / '.$row['1'].' / '.$row['2']. ' / '.$row['3']. ' / '.$row['4']. ' / ' .$row['5'] . ' / ' . $row['6'].'<br>';
	}	 
	 //while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		//echo $row['ID'].' / '.$row['tel'].' / '.$row['city'].' / '.$row['addr'].'<br>';
	 //}
	
	if ($conn->query($insert_sql) === TRUE) {
		//echo "查詢成功";
	} else {
		//echo "<h2 align='center'><font color='antiquewith'>查詢失敗!!</font></h2>";
	}

}else{
	echo "資料不完全";
}

echo "<br><br>";
echo "<a href='./create_order.html'>建立訂單</a>";

/*
$sql = "SELECT * FROM `hostel` WHERE `city`='$city'"; 
if ($res = mysqli_query($conn, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>ID</th>"; 
        echo "<th>tel</th>"; 
		echo "<th>city</th>"; 
		echo "<th>addr</th>"; 
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['ID']."</td>"; 
            echo "<td>".$row['tel']."</td>"; 
			echo "<td>".$row['city']."</td>"; 
			echo "<td>".$row['addr']."</td>"; 
            echo "</tr>"; 
        } 
        echo "</table>"; 
        mysqli_free_res($res); 
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. " .mysqli_error($conn); 
} 
*/
?>

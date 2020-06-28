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


if (isset($_POST['ID'])) {
	$ID = $_POST['ID'];
	
	
	$insert_sql = "SELECT * FROM `order` NATURAL JOIN `customerData` WHERE `ID`='$ID'";

	$result = mysqli_query($conn , $insert_sql);

	echo "訂單編號 / 顧客編號 / 訂購日期 / 房型 / 顧客電話 / 顧客姓名 / 顧客電子郵件 <br><br>";

	while ( $row = mysqli_fetch_array ( $result, MYSQLI_NUM ) ) {
		echo $row['1'].' / '.$row['0'].' / '.$row['2'].  ' / '.$row['4'].  ' / '.$row['6'].  ' / '.$row['7'].  ' / '.$row['8'];
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

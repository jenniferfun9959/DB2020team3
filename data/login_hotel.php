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


if (isset($_POST['meneger_ID']) && isset($_POST['meneger_password'])) {
    $meneger_ID = $_POST['meneger_ID'];
    $meneger_password = $_POST['meneger_password'];
	
	
	$insert_sql = "SELECT * FROM `hotelMeneger` WHERE `meneger_ID`='$meneger_ID' AND `meneger_password` = '$meneger_password' ";
    $result = mysqli_query($conn , $insert_sql);
    
	if (mysqli_fetch_array ( $result, MYSQLI_NUM )) {
		echo "登入成功<br><a href='hotel.html'>進入經營者首頁</a>";
	} else {
		echo "<h2 align='center'><font color='antiquewith'>登入失敗!!</font></h2>";
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

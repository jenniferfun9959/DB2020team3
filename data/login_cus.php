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


if (isset($_POST['customer_email']) && isset($_POST['customer_password'])) {
    $customer_email = $_POST['customer_email'];
    $customer_password = $_POST['customer_password'];
	
	
	$insert_sql = "SELECT * FROM `customerData` WHERE `customer_email`='$customer_email' AND `customer_password` = '$customer_password' ";
    $result = mysqli_query($conn , $insert_sql);
    
	if (mysqli_fetch_array ( $result, MYSQLI_NUM )) {
		echo "登入成功<br><a href='customer.html'>進入會員首頁</a>";
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

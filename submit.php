<?php/*
$con=mysqli_init(); 
mysqli_real_connect($con, "myardui.mysql.database.azure.com", "tiernan@myardui", "T1ernan09", "mysql", 3306);
$sql = "SELECT * FROM Plays";

if($result = mysqli_query($con, $sql)) {
	if (mysqli_num_rows($result) > 0) {
		echo "sdfs";
		while($row = mysqli_fetch_assoc($result)) {
			echo "id: " . $row["Id"]. " - Name: " . $row["Name"]. " - Score: " . $row["Score"]. "<br>";
		}
	} else {
		echo "0 results";
	}
} */

// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:tw-ardui.database.windows.net,1433; Database = ardui", "tiernan", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

?>
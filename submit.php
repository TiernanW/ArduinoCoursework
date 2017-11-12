<?php
	try {
		$conn = new PDO("sqlsrv:server = tcp:tw-ardui.database.windows.net,1433; Database = ardui", "tiernan", "T1ernan09");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		foreach($conn->query("SELECT * FROM Plays") as $row) {
			echo "Username: " . $row[1] . " Score: " . $row[2] . "\n";
		}
	}
	catch (PDOException $e) {
		print("Error connecting to SQL Server.");
		die(print_r($e));
	}
	
	echo $_POST['name']
	echo $_POST['score']
?>
<!DOCTYPE html>

<html>

<head>
	<title>Run n Jump - Leaderboard</title>
	<style>
		body {
			text-align: center;
			font-family: Calibri, Helvetica, sans-serif;
			font-size: 14px;
		}
		.wrapper {
			width: 960px;
			margin: 0 auto;
		}
		.profile {
			display: block;
			width: 100%;
			margin: 10px 0;
		}
	</style>
</head>

<body>
	<div class="wrapper">
		<header>
			<h1>Leaderboard</h1>
		</header>
		<main>
		<?php
			try {
				$conn = new PDO("sqlsrv:server = tcp:tw-ardui.database.windows.net,1433; Database = ardui", "tiernan", "T1ernan09");
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				// For inserting scores via post
				if(isset($_POST['name']) && isset($_POST['score'])) {
					$conn->query("INSERT INTO Plays (Username, Score) VALUES ('".$_POST['name']."', ".$_POST['score'].")");
				}
				
				// Displays all scores
				foreach($conn->query("SELECT TOP 20 * FROM Plays") as $row) {
					echo "<div class=\"profile\"><strong>" . $row[1] . "</strong> - " . $row[2] . "</div>";
				}
			}
			catch (PDOException $e) {
				print("Error connecting to SQL Server.");
				die(print_r($e));
			}
		?>
		</main>
	</div>
</body>

</html>
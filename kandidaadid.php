﻿<?php
include ("header.php");
?>
	
	<form action="#">
            <input id="searchbox" type="text" placeholder="Search..." required>
            <input id="searchbutton" type="submit" value="">
	</form>
	<table id="soovitajad">
		<thead>
			<tr>
				<th>Kandidaadid</th>
			</tr>
		</thead>
		
	<?php
	
	$server = "tcp:ejx5shwlyf.database.windows.net, 1433";
    $user = "server@ejx5shwlyf";
    $pwd = "Parool11";
    $db = "andmebaas";
	
    $conn = sqlsrv_connect($server, array("UID"=>$user, "PWD"=>$pwd, "Database"=>$db));
    if($conn == false){
    	echo "<h2>Error</h2>";
        die(print_r(sqlsrv_errors(),true));
    }
   
    echo "<h2>Connectimisega on korras</h2>";
	$sql = "SELECT * FROM Kandidaadid";
	$result = sqlsrv_fetch_array($conn, $sql);
	sqlsrv_ errors();
	
	var_dump($result); 
	if ($result) {
	echo "Sain";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo " - Name: " . $row["nimi"]."<br>";
    }
	} else {
		echo "0 results";
	}
	
	mysql_close($conn);
	
	echo "<h2>TEINE </h2>";
	
	
	// DB connection info
	$host = "tcp:ejx5shwlyf.database.windows.net,1433";
	$user = "server@ejx5shwlyf";
	$pwd = "Parool11";
	$db = "andmebaas";
	
	echo "A";
	try{
		$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch(Exception $e){
		die(print_r($e));
	}
	echo "A";
	
	$sql = "SELECT * FROM Kandidaadid";
	$stmt = $conn->query($sql);
	$items = $stmt->fetchAll(PDO::FETCH_NUM);
	
	echo $items;
	
	?>
	
		
		<tbody>
			<tr>
				<td><a href="kandidaadid.php" class="button">nr 100 Silver Pajumäe</a></td>
			</tr>
			<tr>
				<td><a href="kandidaadid.php" class="button">nr 101 Liis Mäeots</a></td>
			</tr>
			<tr>
				<td><a href="kandidaadid.php" class="button">nr 102 Karl Erki Jürgen</a></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
		</tbody>
	</table>
</div>

<?php
include ("footer.php");
?>
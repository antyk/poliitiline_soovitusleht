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
	
	$server = "tcp:ejx5shwlyf.database.windows.net,1433";
    $user = "server@ejx5shwlyf";
    $pwd = "Parool11";
    $db = "andmebaas";
	/*
    $conn = sqlsrv_connect($server, array("UID"=>$user, "PWD"=>$pwd, "Database"=>$db));
    if($conn == false){
    	echo "<h2>Error</h2>";
        die(print_r(sqlsrv_errors()));
    }
   
    echo "<h2>Connectimisega on korras</h2>";
	$sql = "SELECT * FROM Kandidaadid";
	$result = mysqli_query($conn, $sql);
	
	if (mysql_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo " - Name: " . $row["nimi"]."<br>";
    }
	} else {
		echo "0 results";
	}
	
	mysql_close($conn);
	*/		
	$link = mysql_connect("tcp:ejx5shwlyf.database.windows.net,1433", "server@ejx5shwlyf", "Parool11");
	$db_list = mysql_list_dbs($link);
	
	echo "AAA";
	echo $db_list;
	
	$i = 0;
	$cnt = mysql_num_rows($db_list);
	echo $cnt;
	while ($i < $cnt) {
		echo mysql_db_name($db_list, $i) . "\n";
		$i++;
}
	
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
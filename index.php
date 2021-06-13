<?php 
	include_once("config.php");

	$result = mysqli_query($mysqli, "SELECT * FROM country");
?>

<!DOCTYPE html>

<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale 1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="stylesheet.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<title>Homepage</title>
</head>

<body>

<h1 align="center"><?php echo "Simple PHP Web Application";?> </h1>

<table class="table1">
	<tr bgcolor='#cccccc'>
		<td><strong>ID</strong></td>
		<td><strong>ISO</strong></td>
		<td><strong>Name</strong></td>
		<td><strong>Nice Name</strong></td>
		<td><strong>ISO 3</strong></td>
		<td><strong>Num Code</strong></td>
		<td><strong>Phone Code</strong></td>
		<td><strong>Date Created</strong></td>
		<td><strong>Update</strong></td>
	</tr>


<?php 

while ($res = mysqli_fetch_array($result)) {

	// code...

	echo "<tr>";
	echo "<td>".$res['id']."</td>";
	echo "<td>".$res['iso']."</td>";
	echo "<td>".$res['name']."</td>";
	echo "<td>".$res['nicename']."</td>";
	echo "<td>".$res['iso3']."</td>";
	echo "<td>".$res['numcode']."</td>";
	echo "<td>".$res['phonecode']."</td>";
	echo "<td>".$res['created_at']."</td>";
	echo "<td><button><a href=\"edit.php?id=$res[id]\">Edit</a></button> &nbsp&nbsp <button><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a></button></td>";

	echo "</tr>";

}

?>

</table>
<br><br>
<button class="button"><a href="add.html" class="addbtn">Add new Data</a></button><br/><br/>

</body>



</html>
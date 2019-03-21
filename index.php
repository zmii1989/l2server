<html>
<form id="auth" method="POST" action="index.php">
items
<input name="item" list="item">
<datalist id="item">
<option label="adena" value="57">
<option label="" value="">
<option label="" value="">

</datalist>

char id		<input type="text" placeholder="owner" name="owner"> </br>
</br>
enchant  	<input type="text" placeholder="enchant" name="enchant"></br>
<br>
count  		<input type="text" placeholder="count" name="count"></br>
<hr>
<input type="submit" value="Create">
</form>
<iframe src="/index1.php" width="300" height="650" align="left">
</iframe><br>

</html>

<?php
$char = $_POST['owner'];
$item = $_POST['item'];
$count = $_POST['count'];
$enchant = $_POST['enchant'];
echo "char : $char </br>";
echo "item :  $item </br>";
echo "enchant :  $enchant </br>";
echo "count :  $count </br>";

$servername = "192.***.***.***";
$database = "*****";
$username = "*****";
$password = "*****";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully<br>";

$sql = "INSERT INTO items_delayed (owner_id, item_id, count, enchant_level) VALUES ('$char', '$item', '$count', '$enchant')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br><br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
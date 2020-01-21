<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: black;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color:lightblue;
color: white;
}

</style>
</head>
<body>
<table>
<tr>
<th>id</th>
<th>code</th>
<th>name</th>
<th>size</th>
<th>number</th>
<th>email</th>
<th>address</th>
<th>message</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "web");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM web";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<td>" . $row["id"]. "</td><td>" . $row["Itemcode"] . "</td><td>"
. $row["name"]. "</td><td>". $row["size"]. "</td><td>". $row["number"]. "</td><td>"
. $row["email"]. "</td><td>". $row["address"]. "</td><td>". $row["message"]. "</td><tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
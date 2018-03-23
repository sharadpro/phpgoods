<?php
mysql_connect('Localhost','root','');
mysql_select_db("biet");

$query="select * from register";
$res=mysql_query($query);


?>
<html>
<head>
</head>
<body>
<table border="1" align="center">
<tr>
<th>ID</th>
<th>NAME</th>
<th>GENDER</th>
<th>EMAIL</th>
<th>PASSWORD</th>
<th>MOBILE</th>
</tr>
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
	<tr>
	<td><?php echo $row['id']; ?></td>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['gender']; ?></td>
	<td><?php echo $row['email']; ?></td>
	<td><?php echo $row['password']; ?></td>
	<td><?php echo $row['mobile']; ?></td>
	</tr>
	<?php
}
?>
</table>
</body>
</html>
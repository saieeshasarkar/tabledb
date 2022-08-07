<?php
$Host = "ec2-107-22-122-106.compute-1.amazonaws.com";
$Database = "d1tn622u5quqb9";
$User = "eigildkwampqad";
$Port = "5432";
$Password = "d1279d342c4929164accf725f011e82e292d9fa732b{b46d994089b78b599e4cf9";
$connecction_string = "host={$Host} port={$Port} dbname={$Database} user:{$User} password:{$Password}";
$connection= pg_connect($connecction_string);
if ($connection){
  echo "connection successfully";
}
?>
<!DOCTYPE html>
<html>
<body>

<h2>form table</h2>

<style>
table, th, td {
  border: 1px solid black;
}
</style>

<table stlye="width:100%">
<tr>
<th>
no.
</th>
<th>
Name
</th>
<th>
Date of birth
</th>
<th>
Email
</th>
<th>
Gender
</th>
<th>
Attended
</th>
</tr>

<tr>
<td>
1
</td>
<td>
<input type="text">
</td>
<td>
<input type="date">
</td>
<td>
<input type="email">
</td>
<td>
<input type="radio" name="gender">male
<input type="radio" name="gender">female
<td>
<input type="checkbox">
</td>
</tr>

<tr>
<td>
2
<td>
<input type="text">
</td>
<td>
<input type="date">
</td>
<td>
<input type="email">
</td>
<td>
<input type="radio" name="gender2">male
<input type="radio" name="gender2">female
</td>
<td>
<input type="checkbox">
</td>

<tr>
<td>
3
<td>
<input type="text">
</td>
<td>
<input type="date">
</td>
<td>
<input type="email">
</td>
<td>
<input type="radio" name="gender3">male
<input type="radio" name="gender3">female
</td>
<td>
<input type="checkbox">
</td>
</tr>
</table>
<p><a href="/">back to main page</a></p>
<p><a href="form_create.php">create</a></p>
<p><a href="form_delete.php">delete</a></p>
<p><a href="form_edit.php">edit</a></p>




</body>
</html>




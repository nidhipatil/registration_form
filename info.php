<!DOCTYPE html>
<html>
<head>
	<title>view</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<?php
include 'connect.php';
?>

<table>
	<tr class="td">
		<td>Name
		<td>Email
		<td>Password
		<td>Address
		<td>Gender
		<td>Hobby<td>
	<tr>

<tbody>

<?php while ($row = mysqli_fetch_array($results)) { ?>
	

	<tr>
    <td><?php echo $row['Name']?></td>
    <td><?php echo $row['Email']?></td>
    <td><?php echo $row['Password']?></td>
    <td><?php echo $row['Address']?></td>
    <td><?php echo $row['Gender']?></td>
    <td><?php echo $row['Hobby']?></td>
    </tr>
  <?php }?>

</tbody>
</table>
 </body>
</html>
 
		
		
		

  <a href="index.php">BACK</a>

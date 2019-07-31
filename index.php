<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
</head>

<body>

<form  class="form" method="post" enctype="multipart/form-data" action="connect.php">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<table>

  <tr>
    <td>Enter your Name</td>
    <td><input type="text" placeholder="your  name"  name="name"  required /></td>
  </tr>

  <tr>
    <td>Enter your Email</td>
    <td><input type="email" placeholder="your  email" name="email" required/></td>
  </tr>

  <tr>
    <td>Enter your Password</td>
    <td><input type="password" placeholder="your  Password"  name="password"/></td>
  </tr>

  <tr>
    <td>Enter your Address</td>
    <td><textarea  placeholder="your  Address" name="address"></textarea></td>
  </tr>

  
  <tr>
    <td>Select your Gender</td>
    <td>
	Male<input type="radio" name="gender" value="Male"/>
	Female<input type="radio" name="gender" value="Female"/>
	</td>
  </tr>

  <tr>
    <td>Choose your Hobbies</td>
    <td>
		Cricket<input type="checkbox" value="cricket" name="hobby"/>
		Singing<input type="checkbox" value="singing" name="hobby"/>
		Dancing<input type="checkbox" value="dancing" name="hobby"/>
	</td>
  </tr>

  


  <tr>
   <td colspan="2" align="center">
  <input type="submit" name="submit" value="submit"/>
   <a href="info.php"> View Information</a>
  </td>

  </tr>

</table>
</form>


</body>
</html>
<?php 

echo $SKU = $_POST['SKU'];
echo $Name = $_POST['name'];
echo $Price = $_POST['price'];
echo $Size = $_POST['size'];
echo $Weight = $_POST['weight'];
echo $Height = $_POST['height'];
echo $Width = $_POST['width'];
echo $Length = $_POST['length'];

$conn = mysqli_connect('sql303.epizy.com','epiz_31051978','pTyX5JVsI2xAk9','epiz_31051978_scandiweb') or die(mysqli_error());

$sql="INSERT INTO product SET 	SKU='$SKU',
								Name='$Name',
								Price='$Price',
								Size='$Size',
								Weight='$Weight',
								Height='$Height',
								Width='$Width',
								Length='$Length'";
								
$result=mysqli_query($conn,$sql) or die(mysqli_error());

if($result==true)
{
	header('location: index.php');
}
else {
echo "Failed";
}
 ?>
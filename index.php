<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Scandiweb Test Task</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<div id="header"><header>Add Product</header></div>
<form action="add-product.php">
	<button type="submit" id="add-btn">ADD</button>
</form>
<form action="delete.php" method="post" id="productTable">
	<button id="delete-product-btn" name="deleteProduct">MASS DELETE</button> 
	<?php
	$conn = mysqli_connect('sql303.epizy.com','epiz_31051978','pTyX5JVsI2xAk9','epiz_31051978_scandiweb') or die(mysqli_error());
	$sql="SELECT * FROM product";
	$result=mysqli_query($conn,$sql) or die(mysqli_error());
			
	if($result==true){
		while($row=mysqli_fetch_assoc($result)){
			$SKU=$row['SKU'];
			$Name=$row['Name'];
			$Price=$row['Price'];
			$Size=$row['Size'];
			$Weight=$row['Weight'];
			$Height=$row['Height'];
			$Width=$row['Width'];
			$Length=$row['Length'];
			$ID = $row['id']
	?>
	<div class="productTable">
		<p class="checkbox"> <input class=delete-checkbox type="checkbox" name="deleteProductCheckbox[]" value="<?php echo $ID; ?>"></p>
		<p> <?php echo $SKU; ?> </p>
		<p> <?php echo $Name; ?> </p>
		<p> <?php echo $Price; ?> $ </p>
		<p> <?php if($Size != 0){ echo ' <span>Size: '.$Size.' MB</span>'; } ?> </p>
        <p> <?php if($Weight != 0){ echo ' <span>Weight: '.$Weight.' KG</span>'; } ?> </p>
		<p> <?php if($Height != 0 || $Width !=0 || $Length !=0) { echo '<span>Dimensions: '.$Height.' x '.$Width.' x '.$Length.'</span>'; } ?> </p>
	</div>				                   
	<?php
		}
			}
	?>			
</form>
<footer>Scandiweb Test Task</footer>
<body>
</body>
</html>
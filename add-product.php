<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Product</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<header>Add Product</header>
	<form action="add-product-action.php" id="product_form" method="post">
	<table>
		<tr class="aprow1">
			<td>SKU:</td>
			<td><input type="text" id="sku" name="SKU" placeholder="Enter SKU" required></td>
		</tr>
		<tr class="aprow2">
			<td>Name:</td>
			<td><input type="text" id="name" name="name" placeholder="Enter Name of The Product" required></td>
		</tr>
		<tr class="aprow3">
			<td>Price:</td>
			<td><input type="text" id="price" name="price" placeholder="Enter Price of The Product" required></td>
		</tr>
		<tr class="aprowsSelector">
			<td>
			<select id="productType" onchange="yesnoCheck(this);">
				<option value="select">Product Type</option>
				<option value="DVD">DVD</option>
				<option value="book">Book</option>
				<option value="furniture">Furniture</option>
			</select>
				<p id="productTypeP">Type Switcher</p>
			<div id="discSize" style="display: none;">
				<label id="sizeLabel" for="size">Size(MB): </label> 
				<input type="text" id="size" name="size" /><br />
			</div>
			<div id="bookWeight" style="display: none;">
				<label id="weightLabel" for="weight">Weight(KG): </label> 
				<input type="text" id="weight" name="weight" /><br />
			</div>
			<div id="furnitureParameters" style="display: none;">
				<label id="lengthLabel" for="length">Length(CM): </label> 
				<input type="text" id="length" name="length" /><br />
				<label id="widthLabel" for="width">Width(CM): </label> 
				<input type="text" id="width" name="width" /><br />
				<label id="heightLabel" for="height">Height(CM): </label> 
				<input type="text" id="height" name="height" /><br />
			</td>
		</tr>
		<tr>
			<td><button id="save-product-btn" type="submit" name="submit">Save</button></td>
		</tr>
	</form>
	</table>
<script type="text/javascript" src="selector.js"></script>
<button type="reset" id="cancel-product-btn" onclick="window.location.href='index.php'"> Cancel </button>
<footer>Scandiweb Test Task</footer>
</body>
</html>
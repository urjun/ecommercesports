<html>
<head>
	<title>Edit Product</title>
</head>
<body>
		<div class='header'>
			<h1>Edit</h1>
		</div>
			<form action='/admin_prod/update' method='post'>
				<div class='product_info'>
					<p>Name: <input type='text' name='name' value="<?= $products['name'] ?>"></p>
					<p>Description: <textarea name='description'><?= $products['description'] ?></textarea></p>
					<p>Add new Category: <input type='text' name='category' value="<?= $products['category'] ?>"></p>
					<p>Add new type: <input type='text' name='type' value="<?= $products['type'] ?>"></p>
					<p>Price: <input type='text' name='price' value='<?= $products['price'] ?>'></p>
					<p>Gender: 	<select name='gender'>
											<option value='male'>Male</option>
											<option value='female'>Female</option>
										</select>
					<p>Color: <input type='text' name='color' value='<?= $products['color'] ?>'></p>
					<p>Brand: <input type='text' name='brand' value='<?= $products['brand'] ?>'></p>
					<p>Model #: <input type='text' name='model' value='<?= $products['model'] ?>'></p>
					<p>Inventory Count: <input type='text' name='inventory_count' value='<?= $products['inventory_count'] ?>'></p>
					<p>Photo link: <input type='text' name='photo' value='<?= $products['photo'] ?>'></p>
					<!-- <input type='submit' value='Cancel'>
					<input type='submit' value='Preview'> -->
					<input type='submit' name='submit' value='update'>
					<input type='hidden' name='submit' value='<?= $products['id'] ?>'>
				</form>
			</div>
		</div>

</body>
</html>

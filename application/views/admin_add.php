<html>
<head>
	<title>Add Product</title>
</head>
<body>
		<div class='header'>
			<h1>Add Product</h1>
		</div>
		<form action='/admin_prod/add' method='post'>
			<div class='product_info'>
				<p>Name: <input type='text' name='name'></p>
				<p>Description: <textarea name='description'></textarea></p>
				<p>Categories:	<select name='category'>
													<option value='basketball'>Basketball</option>
													<option value='running'>Running</option>
													<option value='golf'>Golf</option>
													<option value='tennis'>Tennis</option>
												</select>
				<p>or add new category: <input type='text' name='category'></p>
				<p>Type:	<select name='type'>
										<option value='shirts'>Shirt</option>
										<option value='shoes'>Shoes</option>
										<option value='shorts'>Shorts</option>
									</select>
				<p>or add new type: <input type='text' name='type'></p>
				<p>Price: <input type='text' name='price'></p>
				<p>Gender: 	<select name='gender'>
										<option value='male'>Male</option>
										<option value='female'>Female</option>
									</select>
				<p>Color: <input type='text' name='color'></p>
				<p>Brand: <input type='text' name='brand'></p>
				<p>Model #: <input type='text' name='model'></p>
				<p>Inventory Count: <input type='text' name='inventory_count'></p>
				<p>Photo link: <input type='text' name='photo'></p>
				<!-- <input type='submit' value='Cancel'>
				<input type='submit' value='Preview'> -->
				<input type='submit' name='submit' value='Add'>

			</form>
			</div>
		</div>

</body>
</html>

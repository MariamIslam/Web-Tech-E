<?php
require_once 'controller/productInfo.php';

$products = fetchAllProducts();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form>
		<table style="border: 2px solid black;">
			<thead>
				<tr>
				<th style="border: 2px solid black;">Name</th>
				<th style="border: 2px solid black;">Profit</th>
			</tr>
			</thead>
			<tbody>
				
			<?php foreach($products as $i => $product): ?>
			<tr>
		    <td style="border: 2px solid black;"><?php echo $product['Name'] ?></td>
			<td style="border: 2px solid black;"></td>
			<td style="border: 2px solid black;"><a href="editProduct.php?name=<?php echo $product['Name']?>">Edit</a></td>
			<td style="border: 2px solid black;"><a href="deleteProduct.php?name=<?php echo $product['Name']?>">Delete</a></td>
			</tr>

			<?php endforeach; ?>
			</tbody>
		</table>
	</form>

</body>
</html>
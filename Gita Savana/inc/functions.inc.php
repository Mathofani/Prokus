<?php
function writeShoppingCart() {
	$cart = $_SESSION['cart'];
	if (!$cart) {
		return '<p>You have no items in your shopping cart</p>';
	} else {
		// Parse the cart session variable
		$items = explode(',',$cart);
		$s = (count($items) > 1) ? 's':'';
		return '<p>You have <a href="cart.php">'.count($items).' item'.$s.' in your shopping cart</a></p>';
	}
}

function showCart() {
	global $db;
	$cart = $_SESSION['cart'];
	$total = 0;
	if ($cart) {
		$items = explode(',',$cart);
		$contents = array();
		foreach ($items as $item) {
			$contents[$item] = (isset($contents[$item])) ? $contents[$item] + 1 : 1;
		}
		$output[] = '<form action="cart.php?action=update" method="post" id="cart">';
		$output[] = '<table id="rounded-corner">';
		$output[] = '<tr>';
		$output[] = '<th>cancel</th>';
		$output[] = '<th>nama produk</th>';
		$output[] = '<th>harga produk</th>';
		$output[] = '<th>jumlah</th>';
		$output[] = '<th>total</th>';
		$output[] = '</tr>';
		foreach ($contents as $id=>$qty) {
			$sql = 'SELECT * FROM produk WHERE kode_produk = '.$id;
			$result = $db->query($sql);
			$row = $result->fetch();
			extract($row);
			$output[] = '<tr>';
			$output[] = '<td><a href="cart.php?action=delete&id='.$id.'" class="r">Remove</a></td>';
			$output[] = '<td>'.$nama_produk.'</td>';
			$output[] = '<td>'.$harga_produk.'</td>';
			$output[] = '<td><input type="text" name="qty'.$id.'" value="'.$qty.'" size="3" maxlength="3" id="textfield"/></td>';
			$output[] = '<td>'.($harga_produk * $qty).'</td>';
			$total += $harga_produk * $qty;
			$output[] = '</tr>';
		}
		$output[] = '</table>';
		$output[] = '<p>Total Bayar: <strong>'.$total.'</strong></p>';
		$output[] = '<div><button type="submit" id="button">Update</button></div>';
		$output[] = '<div><input type="submit" id="button" onclick="add_detail.php" value="save"></div>';
		$output[] = '</form>';
	} else {
		$output[] = '<p>You shopping cart is empty.</p>';
	}
	return join('',$output);
}
?>

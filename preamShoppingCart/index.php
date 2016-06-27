<?php
require_once 'library/config.php';
require_once 'library/category-functions.php';
require_once 'library/product-functions.php';
require_once 'library/cart-functions.php';

$_SESSION['shop_return_url'] = $_SERVER['REQUEST_URI'];

$catId  = (isset($_GET['c']) && $_GET['c'] != '1') ? $_GET['c'] : 0;
$pdId   = (isset($_GET['p']) && $_GET['p'] != '') ? $_GET['p'] : 0;

require_once 'include/header.php';

?>
<table border="0" width="90%" height="100%" bgcolor="#FFFFFF" align="center">
<tr>
<td colspan="3" height="5%">
<tr>
<td colspan="3" height="10%" bgcolor="#0066CC" valign="middle"> <font color="#FFFFFF"><h1> PREAM Online Shopping</h1></font>
<tr>
<td colspan="3" height="2%"> &nbsp;
<tr>
<td width="15%" height="5%" bgcolor="#FF0000"> &nbsp;
<td> &nbsp;
<td width="15%"  bgcolor="#FF0000"> &nbsp;
<tr>
<td width="20%" bgcolor="#CCCCCC"  id="leftnav"> 
<?php
require_once 'include/leftNav.php';
?>
<td> <?php
if ($pdId) {
	require_once 'include/productDetail.php';
} else if ($catId) {
	require_once 'include/productList.php';
} else {
	require_once 'include/categoryList.php';
}
?> 

<td width="20%"  bgcolor="#CCCCCC" valign="top"> <?php require_once 'include/miniCart.php'; ?>
<tr>
<td colspan="3" height="10%" bgcolor="#0066FF"> &nbsp;

</table>
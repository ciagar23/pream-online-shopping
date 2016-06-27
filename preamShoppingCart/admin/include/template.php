<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$self = WEB_ROOT . 'admin/index.php';
?>
<html>
<head>
<title><?php echo $pageTitle; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/common.js"></script>
<?php
$n = count($script);
for ($i = 0; $i < $n; $i++) {
	if ($script[$i] != '') {
		echo '<script language="JavaScript" type="text/javascript" src="' . WEB_ROOT. 'admin/library/' . $script[$i]. '"></script>';
	}
}
?>
<head>
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/common.js"></script>
<?php
$n = count($script);
for ($i = 0; $i < $n; $i++) {
	if ($script[$i] != '') {
		echo '<script language="JavaScript" type="text/javascript" src="' . WEB_ROOT. 'admin/library/' . $script[$i]. '"></script>';
	}
}
?>
</head>
<table width="90%" height="100%" border="1" align="center">
<tr>
<td colspan="2" height="10%"> Prim Shopping Cart
<tr>
<td width="25%"  valign="top">
<table>
<tr>
    <td width="150" valign="top">
      <a href="<?php echo WEB_ROOT; ?>admin/">Home</a> 
	  
<tr>
    <td width="150" valign="top"><a href="<?php echo WEB_ROOT; ?>admin/category/">Category</a>
	 
<tr>
    <td width="150" valign="top"> <a href="<?php echo WEB_ROOT; ?>admin/product/">Product</a> 
	  
<tr>
    <td width="150" valign="top"><a href="<?php echo WEB_ROOT; ?>admin/order/?status=Paid">Order</a> 
	 
<tr>
    <td width="150" valign="top"> <a href="<?php echo WEB_ROOT; ?>admin/user/">User</a> 
	
<tr>
    <td width="150" valign="top">  <a href="<?php echo $self; ?>?logout">Logout</a>
</table>
<td valign="top">

<?php
require_once $content;	 
?>
</table>
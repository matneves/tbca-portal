<!DOCTYPE html>
<?php
	$baseUrl = 'http://'.$_SERVER["HTTP_HOST"].'/';
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="<?php echo $baseUrl ?>css/styles.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $baseUrl ?>css/bootstrap.css" type="text/css">

	<script type="text/javascript" src="<?php echo $baseUrl ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $baseUrl ?>js/jquery.ui.js"></script>
	<script type="text/javascript" src="<?php echo $baseUrl ?>js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo $baseUrl ?>js/portal.js"></script>
</head>
<body>
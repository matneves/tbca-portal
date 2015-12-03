<!DOCTYPE html>
<html>
<head>
	<?php if($_SERVER["HTTP_HOST"] != 'localhost'): ?>
		<base href="/">
	<?php else: ?>
		<base href="/portal/">
	<?php endif ?>	

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="css/styles.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.ui.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/portal.js"></script>
</head>
<body>
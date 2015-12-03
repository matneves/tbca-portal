<?php
$title = "TBCA";
include('includes/header.php');

$url = "http://tbca.mateusneves.com.br/alimentos/?nome=".$_GET['nome'];
include('includes/curl.php');

include('includes/busca-mini.php');
?>

<div id="categoria">
	<div class="container">
		<?php include('list.php'); ?>
	</div>
</div>

<?php include('includes/footer.php'); ?>
<?php
$title = "TBCA";
include('includes/header.php');

$url = "http://tbca.mateusneves.com.br/alimentos/";
include('includes/curl.php');

include('includes/busca-mini.php');
?>

<?php if(isset($_GET['id'])): ?>
	<div id="categoria">
		<div class="container">
			<?php include('includes/toolbar.php'); ?>
			<?php include('list.php'); ?>
		</div>
	</div>

<?php else: ?>
	<?php include('includes/404.php') ?>
<?php endif; ?>

<?php include('includes/footer.php'); ?>
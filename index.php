<?php
$title = "TBCA";
include('includes/header.php');
?>

<?php include('includes/busca.php'); ?>

<div id="categorias">
	<div class="container">
		<h2>Categorias</h2>
		<div class="row">
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		getCategories();
	});
</script>

<?php include('includes/footer.php'); ?>
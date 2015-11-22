<?php
$title = "TBCA";
include('includes/header.php');
?>

<?php include('includes/busca.php'); ?>

<div id="categorias">
	<div class="container">
		<h2>Categorias</h2>
		<div class="row cinco">
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('.search-input').stop().keyup(function(event) {
			searchData($(this).val());
		});

		getCategories();
	});

	function searchData(value) {
		$.ajax({
			url: 'http://tbca.mateusneves.com.br/alimentos/',
			data: { nome: value },
		})
		.done(function(response) {
			console.log(response);
		})
		.fail(function() {
			console.log("error: searchData()");
		})
		.always(function() {
		});
	}

	function getCategories(value) {
		$.ajax({
			url: 'http://localhost/tbca/web/app.php/categorias/'
		})
		.done(function(response) {
			var cont = 0;
			$.each(response, function(index, categoria) {
				$('#categorias .row').append('<div class="categoria" onclick="loadCat('+categoria.id+')">'+categoria.nome+'</div>');
			});
		})
		.fail(function() {
			console.log("error: getCategories()");
		})
		.always(function() {
		});
	}

	function loadCat(id){
		window.location = "categoria.php?id="+id;
	}
</script>

<?php include('includes/footer.php'); ?>
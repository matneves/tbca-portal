<?php
$title = "TBCA";
include('includes/header.php');

$url = "http://localhost/tbca/web/app.php/alimentos/";
include('includes/curl.php');

include('includes/busca-mini.php');
?>

<div id="categoria">
	<div class="container">
		<div class="row">
			<h2></h2>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Alimento</th>
						<th>Categoria</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($output as $key => $alimentos): ?>
						<?php foreach ($alimentos as $key => $alimento): ?>
							<?php if ($alimento['id_categoria'] == $_GET['id']): ?>
								<?php $url = "window.location='alimento.php?id=".$alimento['id']."'"; ?>
								<tr onclick="<?php echo $url; ?>">
									<td><?php echo $alimento['id']; ?></td>
									<td><?php echo $alimento['nome']; ?></td>
									<td><?php echo $alimento['id_categoria']; ?></td>
								</tr>
							<?php endif ?>
						<?php endforeach ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		getCategoryName();
	});

	function getCategoryName(){
		categoryId = $('tr:nth-child(2) td:nth-child(3)').text();

		$.ajax({
			url: 'http://localhost/tbca/web/app.php/categorias/'+categoryId
		})
		.done(function(categoria) {
			$('tr td:nth-child(3)').text(categoria.nome);
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	}
</script>

<?php include('includes/footer.php'); ?>
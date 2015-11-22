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
</script>
<?php else: ?>
	<?php include('includes/404.php') ?>
<?php endif; ?>

<?php include('includes/footer.php'); ?>
<?php
$title = "TBCA";
include('includes/header.php');

$url = "http://localhost/tbca/web/app.php/alimentos/?nome=".$_POST['nome'];
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
								<?php $url = "window.location='alimento.php?id=".$alimento['id']."'"; ?>
								<tr onclick="<?php echo $url; ?>">
									<td><?php echo $alimento['id']; ?></td>
									<td><?php echo $alimento['nome']; ?></td>
									<td><?php echo $alimento['id_categoria']; ?></td>
								</tr>
						<?php endforeach ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

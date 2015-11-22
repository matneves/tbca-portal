<?php
$title = "TBCA";
include('includes/header.php');

$apiUrl = "http://tbca.mateusneves.com.br/";

// Corrige nutriente com espaço em branco
$_GET['nutriente'] = str_replace(" ", "+", $_GET['nutriente']);

// Verifica se foi passado o atributo de margem
if(isset($_GET['margem']))
	$url = $apiUrl."alimentos/?nutriente=".$_GET['nutriente']."&valor=".$_GET['valor']."&margem=".$_GET['margem'];
else
	$url = $apiUrl."alimentos/?nutriente=".$_GET['nutriente']."&valor=".$_GET['valor'];

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
				<tbody class="list">
					<?php foreach ($output as $key => $alimentos): ?>
						<?php foreach ($alimentos as $key => $alimento): ?>
							<?php $url = "window.location='alimento.php?id=".$alimento['id']."'"; ?>
							<tr onclick="<?php echo $url; ?>">
								<td class="id"><?php echo $alimento['id']; ?></td>
								<td class="nome"><?php echo $alimento['nome']; ?></td>
								<td class="id-categoria"><?php echo $alimento['id_categoria']; ?></td>
							</tr>
						<?php endforeach ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>

		<div id="pag" class="row">
		</div>
	</div>
</div>

<script type="text/javascript" src="js/paging.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		pagination(30);
	});
</script>

<?php include('includes/footer.php'); ?>
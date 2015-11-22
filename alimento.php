<?php
$title = "TBCA";
include('includes/header.php');

if(isset($_GET['id'])){
	$url = "http://tbca.mateusneves.com.br/alimentos/".$_GET['id']."/nutrientes/";
	include('includes/curl.php');
}

include('includes/busca-mini.php'); 
?>

<?php if(isset($_GET['id'])): ?>

	<?php
	$alimento = array();
	foreach ($output as $key => $alimento) {
		foreach ($alimento as $key => $dadoAlimento) {
			$alimento[] = $dadoAlimento;
		}
	}

	if(!function_exists('fNum')){
		function fNum($valor){
			if (is_numeric($valor)) {
				return number_format($valor, 2, '.', '');
			} else {
				return $valor;
			}
		}
	}
	?>

	<div id="alimento">
		<div class="container">
			<div class="row">
				<h1><?php echo $alimento['nome']; ?></h1>
				<div id="medida-ajustavel">
					<span>Valores referentes a </span><input id="medida-atual" value="100"> g
				</div>
			</div>
			<div class="row cinco">
				<?php foreach ($alimento['nutrientes'] as $key => $value): ?>
					<?php 
					$nome 	= $value['nome'];
					$valor 	= $value['valor'];
					$unidade = $value['unidade'];

					if($value['valor'] == ''){
						$valorReal = 'vazio';
					} else {
						$valorReal = $value['valor'];
					}
					
					$urlSimilar = "resultado-similar.php?nutriente=$nome&valor=$valor";
					?>
					<div class="nutriente">
						<?php if (is_numeric($valorReal)): ?>
							<h3 data-toggle="popover" data-placement="top" data-content="<a href='<?php echo $urlSimilar ?>'>Alimentos semelhantes: <?php echo $nome; ?></a>">
						<?php else: ?>
							<h3>
						<?php endif ?>
								<?php echo $nome; ?>
								<small><?php echo $unidade; ?></small>
							</h3>
						<input data-valor-real="<?php echo $valorReal; ?>" value="<?php echo fNum($valor); ?>" readonly>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('[data-toggle="popover"]').popover({ html: true });
			$('#medida-atual').blur(function(){
				recalcularNutrientes();
			});
		});
	</script>
<?php else: ?>
	<?php include('includes/404.php') ?>
<?php endif; ?>

<?php include('includes/footer.php'); ?>
<?php
$title = "TBCA";
include('includes/header.php');

if(isset($_GET['id'])){
	$url = "http://localhost/tbca/web/app.php/alimentos/".$_GET['id']."/nutrientes/";
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
				<div class="nutriente">
					<h3>
						<?php echo $value['nome']; ?>
						<small><?php echo $value['unidade']; ?></small>
					</h3>
					<input data-valor-real="<?php echo $value['valor']; ?>" value="<?php echo fNum($value['valor']); ?>" readonly>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#medida-atual').blur(function() {
			medida = $(this).val();

			$('.nutriente').each(function() {
				valorOriginal = $(this).find('input').attr('data-valor-real');
				valorAtual = $(this).find('input').attr('data-valor-real');

				if(!isNaN(valorOriginal)){
					result = (medida*valorAtual)/100;
					result = result.toFixed(2);
					$(this).find('input').val(result);
				}
			});
		});
	});
</script>
<?php else: ?>
	callErro();
<?php endif; ?>
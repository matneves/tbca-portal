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
		<?php include('list.php'); ?>
	</div>
</div>

<?php include('includes/footer.php'); ?>
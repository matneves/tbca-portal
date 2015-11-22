<div id="busca">
	<div class="container">
		<div class="row">
			<div id="busca-conteudo">
				<h1 class="titulo-principal">Portal de Pesquisa dos Alimentos</h1>
				<form class="form-inline" method="get" action="resultado-busca.php">
					<div class="form-group">
						<input type="text" name="nome" class="form-control search-input" placeholder="Buscar por alimento..." autocomplete="off">
					</div>
				</form>
				<div class="autocomplete">
					<ul class="list-group"></ul>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="js/autocomplete.js"></script>
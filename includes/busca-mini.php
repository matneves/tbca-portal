<div id="busca-mini">
	<div class="container">
		<div class="row">
			<!-- <div class="icone-menu col-md-2">&#9776; <a href="index.php">PPA</a></div> -->
			<div class="icone-menu col-md-2"><a href="index.php">PPA</a></div>

			<div class="col-md-6 col-md-offset-4">
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
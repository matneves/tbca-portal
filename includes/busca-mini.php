<div id="busca-mini">
	<div class="container">
		<div class="row">
			<!-- <div class="icone-menu col-md-2">&#9776; <a href="index.php">PPA</a></div> -->
			<div class="icone-menu col-md-2"><a href="index.php">PPA</a></div>

			<div class="col-md-6 col-md-offset-4">
				<form class="form-inline" method="get" action="resultado_busca.php">
					<div class="form-group">
						<input type="text" name="nome" class="form-control search-input" placeholder="Buscar por alimento..." autocomplete="off">
					</div>
				</form>
				<div class="autocomplete">
					<ul class="list-group">
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	window.addEventListener("resize", recalcAutocomplete);
	
	$(document).ready(function() {
		$('.search-input').stop().keyup(function(event) {
			searchData($(this).val());
		}).blur(function(event) {
			$('.autocomplete').hide();
		}).focus(function(event) {
			$('.autocomplete').show();
		});;

		$('.autocomplete').css('width', $('.search-input').outerWidth());
	});

	function searchData(value) {
		$.ajax({
			url: 'http://tbca.mateusneves.com.br/alimentos/',
			data: { nome: value },
		})
		.done(function(response) {
			$('.autocomplete ul').html('');

			if(value == '')
				return false;

			i = 0;
			response.alimentos.some(function(alimento) {
				$('.autocomplete ul').append('<li class="list-group-item"><a href="alimento.php?id='+alimento.id+'">'+alimento.nome+'</a></li>');

				if(i++ == 7)
					return true;
			});
		})
		.fail(function() {
			console.log("error: searchData()");
		})
		.always(function() {
		});
	}

	function recalcAutocomplete(){
		$('.autocomplete').css('width', $('.search-input').outerWidth());
	}
</script>
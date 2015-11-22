function getCategories(value) {
	$.ajax({
		url: 'http://tbca.mateusneves.com.br/categorias/'
	})
	.done(function(response) {
		var cont = 0;

		response.categorias.some(function(categoria) {
			$('#categorias .row').append('<div class="categoria" onclick="loadCat('+categoria.id+')">'+categoria.nome+'</div>');
		});
	})
	.fail(function() {
		console.log("error: getCategories()");
	})
	.always(function() {
	});
}

function loadCat(id){
	window.location = "categoria.php?id="+id;
}

function recalcularNutrientes(){
	el = $('#medida-atual');
	medida = el.val();

	$('.nutriente').each(function() {
		valorOriginal = $(this).find('input').attr('data-valor-real');

		if(!isNaN(valorOriginal)){
			result = (medida*valorOriginal)/100;
			result = result.toFixed(2);
			$(this).find('input').val(result);
		}
	});
}

function getCategoryName(){
	categoryId = $('tr:nth-child(2) td:nth-child(3)').text();

	$.ajax({
		url: 'http://tbca.mateusneves.com.br/categorias/'+categoryId+'/'
	})
	.done(function(response) {
		$('tr td:nth-child(3)').text(response.categorias.nome);
	})
	.fail(function() {
		console.log("error: getCategoryName()");
	})
	.always(function() {
		// console.log("complete");
	});
}

function pagination(maxLimit){
	$('#categoria table').paging({limit:maxLimit});
	$('nav a').wrapAll('<ul id="ul-pagination" class="pagination" />');
	$('nav a').wrap('<li />');
}
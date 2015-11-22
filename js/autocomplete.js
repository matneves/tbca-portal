window.addEventListener("resize", recalcAutocomplete);

$(document).ready(function() {
	$('.search-input').stop().keyup(function(event) {
		searchData($(this).val());
	}).blur(function(event) {
		// $('.autocomplete').hide();
	}).focus(function(event) {
		$('.autocomplete').show();
	});;

	$('.autocomplete').css('width', $('.search-input').outerWidth());
});

$(document).mouseup(function (e){
	var container = $(".search-input").parents('.form-inline').parent();

	if (!container.is(e.target) && container.has(e.target).length === 0){
		container.find('.autocomplete').hide();
	}
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
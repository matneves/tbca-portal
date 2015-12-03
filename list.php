<div class="row">
	<h2></h2>
	<table id="listagem" class="table table-hover">
		<thead>
			<tr>
				<th></th>
				<th>Id</th>
				<th>Alimento</th>
				<th>Categoria</th>
				<th>Fonte</th>
			</tr>
		</thead>
		<tbody class="list">
			<?php foreach ($output as $key => $alimentos): ?>
				<?php foreach ($alimentos as $key => $alimento): ?>
					<?php $url = "alimento/".$alimento['id']."/"; ?>
					<tr>
						<td><input type="checkbox"></td>
						<td data-url="<?php echo $url ?>" class="id">
							<?php echo $alimento['id']; ?>
						</td>
						<td data-url="<?php echo $url ?>" class="nome">
							<?php echo $alimento['nome']; ?>
						</td>
						<td data-url="<?php echo $url ?>" class="id-categoria">
							<?php echo $alimento['id_categoria']; ?>
						</td>
						<td>TACO</td>
					</tr>
				<?php endforeach ?>
			<?php endforeach ?>
		</tbody>
	</table>
</div>

<div id="pag" class="row">
</div>

<script type="text/javascript" src="js/paging.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		pagination(30);
		getCategoryName();

		$('td').click(function(){
			if($(this).attr('data-url'))
				window.location = $(this).attr('data-url');
		});
	});
</script>
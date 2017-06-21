<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<html>
<head>
	<title>Teste BiblioMundi</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />

</head>
<body>
	<div class="jumbotron">
		<h1 class="center">Relatório de Vendas - Consolidado </h1>
	</div>
	<table class="table table-hover">
			<thead class="thead-inverse">
				<tr>
					<th></th>
					<th>Autor</th>
					<th>Ebook</th>
					<th>Valor Total</th>
				</tr>
			</thead>
			<?php foreach ($query as $row):  ?>
			<tbody>
				<tr>
					<td></td>
					<td><?php echo $row->name;?><br></td>
					<td><?php echo $row->title;?><br></td>
					<td><?php #echo $row->prince;?>0</td>
				</tr>
      <?php endforeach; ?>

			</tbody>
	</table>

<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

</body>
</html>
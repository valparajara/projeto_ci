<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />

</head>
<body>

	<h1>Relatório de Vendas - Consolidado</h2>
<table>
			<thead>
				<tr>
					<th>Autor</th>
					<th>Ebook</th>
					<th>Valor Total</th>
				</tr>
			</thead>

			<?php foreach ($query as $row): ?>
			<tbody>
				<tr>
					<td><?php echo $row->name;?><br></td>
					<td><?php echo $row->title;?><br></td>
					<td>500.00</td>
				</tr>
      <?php endforeach; ?>  
			</tbody>
		</table>

<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

</body>
</html>
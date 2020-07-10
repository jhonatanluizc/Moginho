<!DOCTYPE html>
<html lang="pt_br">

<html>

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="img/mongoose.png">
	<link rel="stylesheet" href="styles/main.css">
	<title>Select</title>


</head>

<body>
<?php include_once 'Template/header.php'; ?>
<?php include_once("../Controller/Select.php"); ?>

	<header>
		<h1 style="text-align: center; margin-top: 30px; margin-bottom: 50px;">Select no banco de dados (tela de listagem de dados)</h1>
	</header>


	<main>
		<p style="font-weight: bold; margin-bottom: 40px;">Nome da tabela: <?= $user_name ?></p>

		
		<!--Início da tabela-->
		<table class="table" style="text-align: center;">
			<thead style="color: #5cb85c;">
				<tr>
					<?php foreach ($datas as $key => $value) {
						foreach ($value as $key2 => $value2) { ?>
							<th id="<?= $key2 ?>" scope="col"><?= $key2 ?></th>
					<?php }
						break;
					} ?>

				</tr>
			<tbody>
				<?php foreach ($datas as $key => $value) { ?>
					<tr>
						<?php foreach ($value as $key2 => $value2) { ?>
							<td id="<?= $value2 ?>" scope="col"><?= $value2 ?></td>
						<?php } ?>
					</tr>
				<?php } ?>
			</tbody>
			</thead>
		</table>
		<!--Fim da table-->

	</main>

</body>

<?php include_once 'Template/footer2.php'; ?>

</html>
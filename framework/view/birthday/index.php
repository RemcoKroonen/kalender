<div class="container">
	<table border="1">
		<tr>
			<th>#</th>
			<th>Voornaam</th>
			<th>Dag</th>
			<th>Maand</th>
			<th>Jaar</th>
			<th colspan="2">Actie</th>
		</tr>
		
		<?php foreach ($birthdays as $birthday) { ?>
		<tr>
			<td><?= $birthday['birthday_id']; ?></td>
			<td><?= $birthday['birthday_firstname']; ?></td>
			<td><?= $birthday['birthday_day']; ?></td>
			<td><?= $birthday['birthdayt_year']; ?></td>
			<td><a href="<?= URL ?>birthday/edit/<?= $birthday['birthday_id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>birthday/delete/<?= $birthday['birthday_id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>birthday/create">Toevoegen</a>
</div>
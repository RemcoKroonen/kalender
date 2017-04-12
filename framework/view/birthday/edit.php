<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>birthday/editSave" method="post">
	
		<input type="text" name="firstname" value="<?= $student['birthday_firstname']; ?>">
		<input type="text" name="day" value="<?= $student['birthday_day']; ?>">
		
		<select name="year">
			<option value="2000" <?php if ($student['birthday_year'] == "2000") { echo "selected=\"true\""; } ?>>2000</option>
			<option value="2001" <?php if ($student['birthday_year'] == "2001") { echo "selected=\"true\""; } ?>>2001</option>	
		</select>

		<input type="hidden" name="id" value="<?= $birthday['birthday_id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>

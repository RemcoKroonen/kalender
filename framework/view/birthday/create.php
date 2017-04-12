<div class="container">
	<form action="<?= URL ?>birthday/createSave" method="post">
	
		<input type="text" name="firstname" placeholder="john">
		<input type="text" name="day" placeholder="doe">
		<select name="year">
			<option value="male">2000</option>
			<option value="female">2001</option>	
		</select>

		<input type="submit" value="Verzenden">
	
	</form>

</div>
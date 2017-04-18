<div class="container">
    <h1>Toevoegen</h1>
    <form action="<?= URL ?>birthday/createSave" method="post">

        <input type="text" name="person" placeholder="Name">
        <select name="day">
        <?php for ($i = 1; $i <= 31; $i++) {
            echo "<option value=\"$i\">$i</option>";
        } ?>
        </select>

        <select name="month">
            <option value="1">Januari</option>
            <option value="2">Februari</option>
            <option value="3">Maart</option>
            <option value="4">April</option>
            <option value="5">Mei</option>
            <option value="6">Juni</option>
            <option value="7">Juli</option>
            <option value="8">Augustus</option>
            <option value="9">September</option>
            <option value="10">Oktober</option>
            <option value="11">Novermber</option>
            <option value="12">December</option>
        </select>

        <select name="year">
        <?php for ($a = 1900; $a <= 2017; $a++) {
            echo"<option value=\"$a\">$a</option>";
        }
         ?>
        </select>
        <input type="submit" value="Verzenden">
        </form>


</div>
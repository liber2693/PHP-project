<form method="post"> 
	<textarea rows="12" cols="40" name="textarea"></textarea>
	<br>
	<input type="submit" name="enviar" value="dale coño">
</form>

<?php
//echo nl2br($_POST['textarea']);
echo $cantidad = substr_count($_POST['textarea'],"\n");
echo "<br>";
for ($i=0; $i < $cantidad; $i++) { 
	# code...
}
echo $texto = str_replace("\n", "", $_POST['textarea']);
?>
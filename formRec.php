<!DOCTYPE html>
<html>
<head>
	<title>géometrie</title>
</head>
<body>
  <form action="construireRec.php" method="post">
  	<label>Longueur</label>
  	<input type="number" name="long"><br>
      <label>Largeur</label>
  	<input type="number" name="larg"><br>
  	<label>couleur</label>
  	<select name="color">
  		<option>red</option>
  		<option>bleu</option>
  		<option>green</option>
  		<option>white</option>
  		<option>yellow</option>
  	</select><br>
  	<input type="submit" value="construire">
  	<input type="reset" value="annuler">
  </form>
</body>
</html>

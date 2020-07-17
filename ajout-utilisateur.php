<html>
<body style="background:RGB(221, 160, 221);">
</body>
    <center>
<?php include "header2.php"?>
<link rel="stylesheet" href="../style/style.css">
<title>Ajouter un admin</title>
<h2>Ajouter un admin</h2>

<form method="post" action="register.php">
<fieldset> 
<label for="loginn">Votre login</label>
    <div id="loginn">
  <input type="text" name="loginn" value="" >
  </div>

  <br><label for="passwordd">Votre mot de passe</label>
    <div id="passwordd">
  <input type="password" name="passwordd" value="">
  </div>

  <br><br><input type="submit" value="Envoyer">
</fieldset>
</form>
</center>
<h3><p><a href="utilisateurs.php"><img class="retour" src="style/retour.png" height="10%" width="10%" alt="Retour"></p> 
</html>
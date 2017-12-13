<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Partie 7 Exercice 6</title>
</head>
<body>
  <?php
  if (isset($_GET['genre']) AND isset($_GET['firstName']) AND isset($_GET['lastName']))
  {
    echo $_GET['genre'] . ', ' . $_GET['firstName']. ' ' .$_GET['lastName'];
  }
  else{
    ?>
    <form action="index.php" method="get">
      <select name="genre">
        <option value="Monsieur">Mr</option>
        <option value="Madame">Mme</option>
      </select>
      <label for="firstName">Nom :</label><input type="text" name="firstName">
      <label for="lastName">Prénom :</label><input type="text" name="lastName">
      <input type="submit" value="valider">
    </form>
    <?php
  }
  ?>
</body>
</html>

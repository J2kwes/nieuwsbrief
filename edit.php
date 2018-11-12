<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>edit</title>
</head>
<body>

<?php
$id = $_GET['id'];
$voornaam = $_GET['voornaam'];
$tussenvoegsel = $_GET['tussenvoegsel'];
$achternaam = $_GET['achternaam'];
$mailadres = $_GET['mailadres'];
echo "<h2>Edit id $id</h2>"
?>

<form method="get" action="verwerk_edit.php">
    <input type="hidden" name="id" value=<?php echo $id; ?>
    <label>Voornaam: <input type="text" name="voornaam" value="<?php echo $voornaam; ?>"</label><br>
    <label>tussenvoegsel: <input type="text" name="tussenvoegsel" value="<?php echo $tussenvoegsel; ?>"</label><br>
    <label>achternaam: <input type="text" name="achternaam" value="<?php echo $achternaam; ?>"</label><br>
    <label>mailadres: <input type="text" name="mailadres" value="<?php echo $mailadres; ?>"</label><br>
    <input type="submit" name="submit" value="edit">
</form>

</body>
</html>

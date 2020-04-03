<?php
if(!isset($_SESSION))
session_start();
if(!isset($_SESSION['logged_in']))
header("location: index.php");

require_once("baza.php");
$sql="SELECT * FROM korisnici WHERE id=".$_SESSION['user_id'];
$stmt=$dbh->query($sql);
$korisnik=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<html>
<head>
<title>4SI</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<meta charset="UTF-8">
</head>
<body>
    <?php require_once("header.php");?>
<div class=dobrodoslica>
<?php echo "<h1>de-si ".$_SESSION['ime']."</h1>"; ?>
</div>
<div class="score">
<?php
echo "BROJ URADJENIH ZADATAKA: ".$korisnik['brojZadataka'];


?>

</div>
<?php
require_once("footer.php");
?>
</body>
</html>
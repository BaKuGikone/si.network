<?php
if(!isset($_SESSION))
session_start();
if(isset($_SESSION['logged_in']))
header("location: home.php");
?>
<html>
<head>
<title>4SI</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<meta charset="UTF-8">
</head>
<body>
    <div class="index-header">
        <h1>Dobrodosli na moju kreaciju</h1>
    </div>
    <div class="dobrodoslica">
        Ukoliko ne znate šta je ovo, ovo je stranica koju sam kreirao
        za koju se server nalazi na mojoj mašini. Cilj je da ovde 
        sumiramo zadatke vezane za školu i da omogućimo to-do listu
        gde ćemo moći da beležimo šta smo sve uradili. Svako ko želi
        da učestvuje dobiće nalog od mene. Nadam se da će veći deo
        odeljenja hteti da učestvuje kako bi unapredili ovu stranicu
        što više.
    </div>

    <div class="login-form">
        <form  method="POST" action="login.php">
            
            <label for="username"><b>Username</b></label>
            <input type="text"  placeholder="Enter Username" name="username"  required/>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required/>
        
            <button type="submit" value="Login" >Log In</button>
        </form>
    </div>
    <?php require_once("footer.php");?>
</body>
</html>
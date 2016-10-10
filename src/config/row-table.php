<?php
include "../class/Bdd.php";
$bdd = new \mjgn\Bdd();
$request = "INSERT INTO participant_list (
name,
first_name,
image_url,
date,
hour)
VALUES (
'jean',
'moulin',
'https://s22.postimg.org/hzcxtkckh/Couverture_Mousselines_au_fil_du_temps_une_dit.jpg',
Now(),
Now())
";
$bdd->execSql($request);


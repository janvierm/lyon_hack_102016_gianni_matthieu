<?php
include "../class/Bdd.php";
$bdd = new \mjgn\Bdd();
$bdd->execSql($request);
$request = "INSERT INTO participant-list (
name,
first_name,
image_url,
nb_vote,
voted,
hour,
date)
VALUES (
'jean',
'moulin',
'https://s22.postimg.org/hzcxtkckh/Couverture_Mousselines_au_fil_du_temps_une_dit.jpg',
NULL,
NULL)
";
$bdd->execSql($request);


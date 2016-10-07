<?php
include "../class/Bdd.php";
$bdd = new \mjgn\Bdd();
$request = "CREATE TABLE participant_list (
    id INT PRIMARY KEY AUTO_INCREMENT, 
    name VARCHAR(50), 
    first_name VARCHAR(50),  
    image_url VARCHAR(255),
    nb_vote SMALLINT,
    voted BOOLEAN,
    hour TIME,
    date DATE
)";
$bdd->execSql($request);



<?php
/**
 * User: apprenti
 * Date: 22/09/16
 * Time: 11:08
 */

require "../../class/Bdd.php";

$name = $_POST['name'];
$first_name = $_POST['first_name'];
$image_url = $_POST['image_url'];

$mybdd = new \mjgn\Bdd();


$sql = "INSERT INTO participant_list (name, first_name, image_url, hour, date)
VALUES ('$name', '$first_name', '$image_url', CURRENT_TIME (), CURRENT_DATE ())";
$mybdd->execSql($sql);



header("location: ../../../public/index.php");
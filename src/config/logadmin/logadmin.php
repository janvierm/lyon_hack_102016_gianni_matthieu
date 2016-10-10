<?php
/**
 * User: apprenti
 * Date: 06/10/16
 * Time: 23:27
 */

/**
 * login and password are defined
 */
$login_valide = "admin";
$pwd_valide = "wcs";

/**
 * testing to see if our variables are well defined
 */
if (isset($_POST['login']) && isset($_POST['pwd'])) {

    /**
     * checking if login and password are correct
     */
    if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd']) {


        /**
         * if everything is ok, starting session
         */
        session_start ();
        /**
         * visitor variables are registered as session variables ($login and $pwd)
         */
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['pwd'] = $_POST['pwd'];

        /**
         * redirecting the visitor to the backoffice page
         */
        header ('location: ../../layout/backoffice.php');
    }
    else {
        echo '<body onLoad="alert(\'Membre non reconnu...\')">';
        echo '<meta http-equiv="refresh" content="0;URL=index.htm">';
    }
}
else {
    echo 'Les variables du formulaire ne sont pas déclarées.';
}
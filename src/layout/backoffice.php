<?php

/**
 * starting session
 */
session_start ();

/**
 * getting our session variables
 */
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

    echo '<html>';
    echo '<head>';
    echo '<title>Page backoffice</title>';
    echo '</head>';

    echo '<body>';
    echo 'Bienvenue !';
    echo '<br />';

    /**
     * link to logout
     */
    echo '<a href="../config/logadmin/logoutadmin.php">Déconnexion</a>';
}
else {
    echo 'Les variables ne sont pas déclarées.';
}

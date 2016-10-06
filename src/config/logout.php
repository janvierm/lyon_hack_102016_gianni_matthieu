<?php
/**
 * User: apprenti
 * Date: 07/10/16
 * Time: 01:02
 */

    // On démarre la session
    session_start ();

    // On détruit les variables de notre session
    session_unset ();

    // On détruit notre session
    session_destroy ();

    // On redirige le visiteur vers la page d'accueil
    header ('location: ../../public/index.php');
<?php
/**
 * User: apprenti
 * Date: 07/10/16
 * Time: 01:02
 */

    session_start ();

    session_unset ();

    session_destroy ();

    header ('location: ../../public/index.php');
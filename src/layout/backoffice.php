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


    require  __DIR__.'/../class/Bdd.php';
    $conn = new \mjgn\Bdd();

    $conn->execSql("select image_url, name, first_name, nb_vote from participant_list order by nb_vote desc");


    while($contest = $conn->getResult()->fetch_assoc()){ ?>

        <div class="block_all_img vertical_center_block col-xs-12 col-sm-6 col-md-4">
            <div class="block_img center-block col-xs-6 col-sm-12 col-md-12">
                <img class="img_socks img-responsive" src="<?php echo $contest['image_url'];?><" alt="<?php echo $contest['name'];?>">
            </div>

            <div class="block_text center-block col-xs-6 col-sm-12 col-md-12">
                <div class="contest_name">
                    <p><?php echo $contest['name'] . ' ' .$contest['first_name'];?></p>
                    <p><?php echo 'Nombre de vote: ' . $contest['nb_vote'];?></p>
                </div>
                <button type="button" class="btn vote center-block btn-warning">Voter</button>
            </div>
        </div>

     <?php
}

    /**
     * link to logout
     */
    echo '<a href="../config/logadmin/logoutadmin.php">Déconnection</a>';
}
else {
    echo 'Les variables ne sont pas déclarées.';
}
?>

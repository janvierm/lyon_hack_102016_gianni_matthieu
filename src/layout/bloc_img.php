<div class="container container_block_books">
    <!--   -->
    <?php

    require  __DIR__.'/../class/Bdd.php';
    $conn = new \mjgn\Bdd();

    $conn->execSql("select image_url, name from participant_list order by hour desc");?>
    <h1>Concours des plus belles chaussettes</h1>

    <?php while($contest = $conn->getResult()->fetch_assoc()){ ?>

        <div class="block_all_img vertical_center_block col-xs-12 col-sm-6 col-md-4">
            <div class="block_img center-block col-xs-6 col-sm-12 col-md-12">
                <img class="img_socks img-responsive" src="<?php echo $contest['image_url'];?><" alt="<?php echo $contest['name'];?>">
            </div>
        </div>


    <?php }?>

</div>
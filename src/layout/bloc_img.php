<div class="container container_block_books">
    <!--   -->
    <?php

    require  __DIR__.'/../class/Bdd.php';
    $conn = new \mjgn\Bdd();
    $conn->execSql("select image_url, name from participant_list order by hour desc");

    ?>

    <?php while($contest = $conn->getResult()->fetch_assoc()){ ?>

        <div class="block_books vertical_center_block col-xs-12 col-sm-6 col-md-4">
            <div class="block_img center-block col-xs-6 col-sm-12 col-md-12">
                <img class="img_book" src="<?php echo $contest['image_url'];?><" alt="<?php echo $contest['title'];?>">
            </div>

            <div class="block_text center-block col-xs-6 col-sm-12 col-md-12">
                <p class="text_intro"><?php echo $contest['name'];?></p>
                <a class="btn_more" href="">vote</a>
            </div>
        </div>


    <?php }?>

</div>
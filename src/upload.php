
<?php
if(isset($_POST['go']) && is_uploaded_file($_FILES['fichier']['tmp_name'])){
    $info = @getimagesize($_FILES['fichier']['tmp_name']);
    if($info){ // c'est une image
        var_dump($info);
        // notez qu'il est  sans doute préférable de renommer l'image
        move_uploaded_file($_FILES['fichier']['tmp_name'], __DIR__.'/'.$_FILES['fichier']['name']);
    }else{
        // ce n'est pas une image
        print "erreur";
    }
}
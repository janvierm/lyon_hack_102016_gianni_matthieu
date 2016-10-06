<?php
/**
 * User: gianni
 * Date: 06/10/16
 * Time: 16:34
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload</title>
</head>
<body>
    <?php
    if(isset($_POST['go']) && is_uploaded_file($_FILES['fichier']['tmp_name'])){
        var_dump($_FILES['fichier']['tmp_name']);
    }
    ?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="POST">
    <input type="file" name="fichier">
    <input type="submit" name="go" value="upload" />
</form>
</body>
</html>

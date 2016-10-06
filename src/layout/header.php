<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <title>Concours de chaussettes</title>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    if(isset($_POST['go']) && is_uploaded_file($_FILES['fichier']['tmp_name'])){
        var_dump($_FILES['fichier']['tmp_name']);
    }
    ?>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">WCS</a>
                <div class="nav navbar-nav navbar-right">
                    <div class="row col-xs-offset-8 col-xs-4">
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="POST">
                            <input type="file" name="fichier">
                            <input type="submit" name="go" value="upload" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

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
                        <form name="participate" action="../src/config/uploadimg/upload.php" method="post">
                            Nom :
                            <input type="text" value="" name="name"/>
                            <br/>
                            Prénom :
                            <input type="text" value="" name="first_name"/>
                            <br/>
                            Image :
                            <input type="file" value="" name="image_url"/>
                            <br/>
                            <input type="submit"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

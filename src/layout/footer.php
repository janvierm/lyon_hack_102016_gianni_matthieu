<!-- <footer class="container-fluid">

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">admin login</button>

    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <h3>Accès Backoffice</h3>
                <form action="../src/config/logadmin/logadmin.php" method="post">
                    Login : <input type="text" name="login">
                    <br />
                    Mot de passe : <input type="password" name="pwd"><br />
                    <input type="submit" value="Connexion">
                </form>
            </div>
        </div>
    </div>

-->



<footer class="navbar">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-xs-12 fooText">
                <div class="bd-example">
                    <a data-toggle="modal" data-target="#mentionslegales" data-whatever="">Acces back-office</a>
                    <div class="modal fade" id="mentionslegales" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="exampleModalLabel">Administrateur</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="../src/config/logadmin/logadmin.php" method="post">
                                        Login : <input type="text" name="login">
                                        <br />
                                        Mot de passe : <input type="password" name="pwd"><br />
                                        <input type="submit" value="Connexion">
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>



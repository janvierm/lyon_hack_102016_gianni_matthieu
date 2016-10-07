<footer class="container-fluid foo_bg">

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">admin login</button>

    <div class="modal fade bd-example-modal-sm" id="modal1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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


</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>


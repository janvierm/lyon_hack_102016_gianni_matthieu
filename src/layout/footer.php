<footer class="container-fluid">

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">admin login</button>

    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <h3>Accès Backoffice</h3>
                <form action="../src/config/login.php" method="post">
                    Login : <input type="text" name="login">
                    <br />
                    Mot de passe : <input type="password" name="pwd"><br />
                    <input type="submit" value="Connexion">
                </form>
            </div>
        </div>
    </div>


</footer>

</body>

</html>


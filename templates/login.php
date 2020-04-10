<?php $this->title = "Connexion"; ?>

    <!--Start Contact page content hear-->
    <!--Contact page contact form area start-->
    <section class="login-form-main area-pading">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="main-form text-center">
                        <div class="contact-area-title">
                            <h2 class="text-uppercase">Connectez-vous</h2>
                            <p>En cas de problème contactez contact@stratos-consulting.fr</p>
                        </div>
                        <form action="../public/index.php?route=dashboard" method="POST">
                            <input type="text" name="username" placeholder="Identifiant">
                            <input type="text" name="password" placeholder="Mot de passe">
                            <a href="#">mot de passe oublié ?</a>
                            <div class="submit-button">
                                <input type="submit" value="Rejoindre">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
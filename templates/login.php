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
                            <?= $this->session->show('needLogin'); ?>
                            <?= $this->session->show('logout'); ?>
                        </div>
                        <form action="index.php?route=login" method="post">
                            <?= $this->session->show('error_login'); ?>
                            <input type="text" id="email" name="email" placeholder="Identifiant" value="<?= isset($post) ? htmlspecialchars($post->get('email')): ''; ?>">
                            <input type="password" id="password" name="password" placeholder="Mot de passe">
                            
                            <div class="submit-button">
                                <input type="submit" name="submit" id="submit" value="Connexion">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $this->title = "Contact"; ?>
    <!--Start Contact page content hear-->
    <!--Contact page contact form area start-->
    <section class="contact-form-main area-pading">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="main-form text-center">
                        <div class="contact-area-title">
                            <h2 class="text-uppercase">Laissez nous un message</h2>
                            <?= $this->session->show('sendEmail'); ?>
                            <p>Prenez contact avec nos experts</p>
                        </div>
                        <form action="index.php?route=sendMail" method="POST">
                            <input type="text" name="name" placeholder="Nom">
                            <?= isset($errors['name']) ? $errors['name'] : ''; ?>

                            <input type="email" name="email" placeholder="Email">
                            <?= isset($errors['email']) ? $errors['email'] : ''; ?>

                            <textarea name="message" cols="30" rows="5" placeholder="Message"></textarea>
                            <?= isset($errors['message']) ? $errors['message'] : ''; ?>
                            
                            <div class="submit-button">
                                <input type="submit" name="submit" value="Envoyé !">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact page contact form area End-->
    <div class="contact-page-map">
        <div id="contactMap"></div>
    </div>
    <!--End of Contact page content heat-->
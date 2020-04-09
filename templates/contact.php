<?php
include 'header.php';
?>

    <!--Start Contact page content hear-->
    <!--Contact page contact form area start-->
    <section class="contact-form-main area-pading">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="main-form text-center">
                        <div class="contact-area-title">
                            <h2 class="text-uppercase">Laissez nous un message</h2>
                            <p>Prenez contact avec nos experts</p>
                        </div>
                        <form action="#" method="POST">
                            <input type="text" name="name" placeholder="Name">
                            <input type="email" name="email" placeholder="Email">
                            <textarea name="message"  cols="30" rows="5" placeholder="Message"></textarea>
                            <div class="submit-button">
                                <input type="submit" value="Envoyé !">
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

<?php
include 'footer.php';
?>
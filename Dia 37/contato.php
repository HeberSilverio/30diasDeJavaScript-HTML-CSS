<?php

    include("head.php");

?>

<body>

    <?php
        include("header.php");
        include("menu-mobile.php");
    ?>


    <!-- main wrapper start -->
    <main>

        

        <!-- contact area start -->
        <div class="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-message">
                            <h2>Fale Conosco</h2>
                            <form id="contact-form" action="http://whizthemes.com/mail-php/genger/mail.php" method="post" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="first_name" placeholder="Nome *" type="text" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="phone" placeholder="Telefone *" type="text" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="email_address" placeholder="Email *" type="text" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="contact_subject" placeholder="Assunto *" type="text">
                                    </div>
                                    <div class="col-12">
                                        <div class="contact2-textarea text-center">
                                            <textarea placeholder="Mensagem *" name="message" class="form-control2" required=""></textarea>
                                        </div>
                                        <div class="contact-btn">
                                            <button class="btn btn__bg" type="submit">Enviar</button>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-info">
                            <h2>Quem Somos</h2>
                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
                                est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum
                                formas human.</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area end -->

    </main>
    <!-- main wrapper end -->
<?php
    include("footer.php");
    ?>
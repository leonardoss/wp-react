<!DOCTYPE html>
<html lang="en">
<?php include '../includes/_head.php'; ?>
<body>

    <!--Switcher-->
    <div class="style-switcher">
        <span class="style-switcher__control"></span>
        <div class="style-switcher__list">
            <a class="style-switcher__link style-switcher__link--color"></a>
            <a class="style-switcher__link style-switcher__link--mono"></a>
        </div>
    </div>
    <!--Switcher-->

    <!--Main menu-->
    <div class="menu">
        <div class="container">
            <div class="row">
                <div class="menu__wrapper d-none d-lg-block col-md-12">
                    <nav class="">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#posts">other posts</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="menu__wrapper col-md-12 d-lg-none">
                    <div class="menu__mobile-button">
                        <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Main menu-->

    <!-- Mobile menu -->
    <div class="mobile-menu d-lg-none">
        <div class="container">
            <div class="mobile-menu__close">
                <span><i class="mdi mdi-close" aria-hidden="true"></i></span>
            </div>
            <nav class="mobile-menu__wrapper">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#other_posts">other posts</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Mobile menu -->

    <!--Header-->
    <header class="background blog-header" style="background-image: url(assets/img/img_bg_main.jpg)">
    </header>
    <!--Header-->

    <!--Article-->
    <div class="container">
        <div class="article">
            <div class="row">
                <div class="col-md-12">
                    <a class="article__back-link" href="index.html"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Back</a>
                    <p class="article__title">How I organize my work with code</p>
                    <p class="article_date">April, 20, 2017</p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut
                        perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                        vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                        aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                        sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                        voluptatem.</p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui:
                    </p>
                    <figure>
                        <img src="http://via.placeholder.com/1000x450">
                        <figcaption>This is how I organize my HTML, CSS and PHP files</figcaption>
                    </figure>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui.
                    </p>
                    <p class="article__share">Share this post:
                        <a><i class="fa fa-linkedin-square"></i></a>
                        <a><i class="fa fa-facebook-square"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--Article-->

    <!--Other Posts-->
    <section id="posts" class="container section">
        <div class="row">
            <div class="col-md-12">
                <h2  id="other_posts" class="section__title">Other Posts_</h2>
            </div>
        </div>

        <div class="row posts">
            <div class="col-md-5 mr-auto">
                <div class="posts__item">
                    <a href="">
                        <h3 class="posts__title">What’s new in the IT Industry?</h3>
                        <p class="posts__description">Invitation excellence imprudence understood it continuing to.
                            Ye show done an into.</p>
                    </a>
                </div>
                <div class="posts__item">
                    <a href="">
                        <h3 class="posts__title">How I organize my work with code</h3>
                        <p class="posts__description">Invitation excellence imprudence understood it continuing to.
                            Ye show done an into.</p>
                    </a>
                </div>
                <div class="posts__item">
                    <a href="">
                        <h3 class="posts__title">How to use css-preprocessor</h3>
                        <p class="posts__description">Invitation excellence imprudence understood it continuing to.
                            Ye show done an into.</p>
                    </a>
                </div>
            </div>
            <div class="col-md-5 mr-auto">
                <div class="posts__item">
                    <a href="">
                        <h3 class="posts__title">What’s new in the IT Industry?</h3>
                        <p class="posts__description">Invitation excellence imprudence understood it continuing to.
                            Ye show done an into.</p>
                    </a>
                </div>
                <div class="posts__item">
                    <a href="">
                        <h3 class="posts__title">How I organize my work with code</h3>
                        <p class="posts__description">Invitation excellence imprudence understood it continuing to.
                            Ye show done an into.</p>
                    </a>
                </div>
                <div class="posts__item">
                    <a href="">
                        <h3 class="posts__title">How to use css-preprocessor</h3>
                        <p class="posts__description">Invitation excellence imprudence understood it continuing to.
                            Ye show done an into.</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Other Posts-->

    <!--Contact-->
    <div class="background" style="background-image: url(assets/img/img_bg_main.jpg)">
        <div id="contact" class="container section">
            <div class="row">
                <div class="col-md-12">
                    <p id="contacts_header" class="section__title">Get in touch_</p>
                </div>
            </div>
            <div class="row contacts">
                <div class="col-md-5 col-lg-4">
                    <div class="contacts__list">
                        <dl class="contact-list">
                            <dt>Phone:</dt>
                            <dd><a href="tel:82344563333">8 (234) 456-33-33</a></dd>
                            <dt>Skype:</dt>
                            <dd><a href="skype:iamivanovivan">iamivanovivan</a></dd>
                            <dt>Email:</dt>
                            <dd><a href="mailto:mail@mail.com">mail@mail.com</a></dd>
                        </dl>
                    </div>
                    <div class="contacts__social">
                        <ul>
                            <li><a href="">Facebook</a></li>
                            <li><a href="">Linkedin</a></li>
                            <li><a href="">GitHub</a></li>
                            <li><a href="">Bitbucket</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 col-lg-5">
                    <div class="contacts__form">
                        <p class="contacts__form-title">Or just write me a letter here_</p>
                        <form class="js-form">
                            <div class="form-group">
                                <input class="form-field js-field-name" type="text" placeholder="Your name" required>
                                <span class="form-validation"></span>
                                <span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
                            </div>
                            <div class="form-group">
                                <input class="form-field js-field-email" type="email"  placeholder="Your e-mail" required>
                                <span class="form-validation"></span>
                                <span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
                            </div>
                            <div class="form-group">
                                <textarea class="form-field js-field-message" placeholder="Type the message here"
                                          required></textarea>
                                <span class="form-validation"></span>
                                <span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
                            </div>
                            <button class="site-btn site-btn--form" type="submit" value="Send">Send</button>
                        </form>
                    </div>
                    <div class="footer">
                        <p>© 2016 Ivan Susanin. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Contact-->

    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/menu.js"></script>
    <script src="assets/js/jquery.waypoints.js"></script>
    <script src="assets/js/progress-list.js"></script>
    <script src="assets/js/section.js"></script>
    <script src="assets/js/mobile-menu.js"></script>
    <script src="assets/js/contacts.js"></script>
    <script src="assets/js/mbclicker.min.js"></script>
    <script src="assets/js/site-btn.js"></script>
    <script src="assets/js/style-switcher.js"></script>
</body>
</html>

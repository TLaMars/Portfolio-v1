<!DOCTYPE html>
<html>
    <?php
    $controller = new Controller();
    $controller->loadHead('Homepage');
    ?>
    <body>
        <header>
            <article>
                <div class="bg"></div>
                <?php
                    $controller->loadNav('Homepage');
                ?>
                <section>
                    <div>
                        <h3>Hi, I am</h3>
                        <h1>Thomas Lamars</h1>
                        <p>A Dutch IT student living in Heerhugowaard.</p>
                    </div>
                    <section id="svgCompHome">
                        <?php
                        if(isset($_COOKIE['darkmode']))
                            if($_COOKIE['darkmode'] == 'true')
                                include('images/comphonedark.svg');
                            else 
                                include('images/comphonewhite.svg');
                        else 
                                include('images/comphonewhite.svg');
                        ?>
                    </section>
                </section>
            </article>
        </header>
        <main>
            <article id="about">
                <h1>About me</h1>
                <article>
                    <img src="images/thomas.jpg" alt="">
                    <div>
                        <h2>Thomas <span>Lamars</span></h2>
                        <p>
                            Hi, I’m Thomas Lamars, 19 years old and
                            live in Heerhugowaard. I love programming
                            and making designs in my spare time.
                            <br><br>
                            Since September 2017 I’m studying
                            Information Technology at the
                            Inholland University of Applied Sciences
                            located in the city Haarlem.
                        </p>
                        <a class="btn btn-primary" role="button">Resume</a>
                    </div>
                </article>
            </article>
            <article id="projects">
                <div class="bg"></div>
                <section>
                    <h1>Latest Projects</h1>
                    <article class="project1">
                        <a href=""><img src="/images/placeholder.png" alt=""></a>
                        <p><strong>OlympiaHaarlem</strong></p>
                        <p>Reservation System</p>
                        <p><a href="">Show Project</a></p>
                    </article>
                    <article class="project2">
                        <a href=""><img src="/images/placeholder.png" alt=""></a>
                        <p><strong>OlympiaHaarlem</strong></p>
                        <p>Joomla Template</p>
                        <p><a href="">Show Project</a></p>
                    </article>
                    <article class="project3">
                        <a href=""><img src="/images/placeholder.png" alt=""></a>
                        <p><strong>Haarlem Festival</strong></p>
                        <p>Webshop / CMS</p>
                        <p><a href="">Show Project</a></p>
                    </article>
                    <a class="btn btn-secondary">All projects</a>
                </section>
            </article>
            <article id="contact">
                <h1>Contact</h1>
                <p>Do you want to get in touch?</p>
                <p>Try one of the options below!</p>
                <div>
                    <section id="mail" class="box"><i class="fas fa-envelope"></i>
                        <p>thomas@lamars.nl</p>
                    </section>
                    <section id="phone" class="box"> <i class="fas fa-mobile"></i>
                        <p>+ 31 6 22837418</p>
                    </section>

                </div>
                <a class="btn btn-primary">Contact Form</a>
            </article>
        </main>
        <?php
            $controller->loadFooter();
        ?>
    </body>
</html>
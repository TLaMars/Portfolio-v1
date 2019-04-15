<!DOCTYPE html>
<html>
    <?php
    $controller = new Controller();
    $controller->loadHead('Error404');
    ?>
    <body id="contactPage">
        <header>
            <article>
                <div class="bg"></div>
                <?php
                    $controller->loadNav('Error404');
                ?>
                <article class="card">
                    <h1>Contact</h1>
                    <form>
                        <input type="text" name="name" id="name" placeholder="Thomas Lamars" />
                        <input type="text" name="email" id="email" placeholder="Thomas Lamars" />
                        <input type="text" name="phone" id="phone" placeholder="Thomas Lamars" />
                        <textarea name="question" id="question" cols="30" rows="10"></textarea>
                    </form>
                </article>
            </article>
        </header>
        <main>
            <article id="contact">
                <h1>Other ways to contact me</h1>
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
<!DOCTYPE html>
<html>
    <?php
    $controller = new Controller();
    $controller->loadHead('Error404');
    ?>
    <body>
        <header id="error">
            <article>
                <div class="bg"></div>
                <?php
                    $controller->loadNav('Error404');
                ?>
                <section>
                    <div>
                        <h3>Hi, I am sorry to say</h3>
                        <h1>This page doesn't exists</h1>
                        <p id="funnytext">You tried to access a page I didn't create. If you wan't me to create this page just contact me!</p>
                        <br>
                        <p>Error: 404 page not found</p>
                    </div>
                    <section id="errorComphone">
                        <?php
                            if(isset($_COOKIE['darkmode']))
                                if($_COOKIE['darkmode'] == 'true')
                                    include('images/404comphonedark.svg');
                                else 
                                    include('images/404comphone.svg');
                            else 
                                    include('images/404comphone.svg');
                        ?>
                    </section>
                </section>
            </article>
        </header>
    </body>
</html>
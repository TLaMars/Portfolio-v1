<nav>
    <h1>Thomas</h1>
    <img id="open" src="images/menu.svg" alt="menu" title="menu">
    <ul id="nav" class="">
        <section>
            <h1>Menu</h1>
            <img id="close" src="images/closemenu.svg" alt="menu" title="menu">
        </section>
        <div>
            <li><a href="/">Home</a></li>
            <li><a href="/about-me">About me</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="/contact">Contact</a></li>
            <li id="goLight" <?php if(isset($_COOKIE['darkmode'])) if($_COOKIE['darkmode'] == 'true') echo 'style="display:block"'; else echo 'style="display:none"'; else echo 'style="display:block"';?>><img src="images/sun.png" style="display:block;"/></li>
            <li id="goDark" <?php if(isset($_COOKIE['darkmode'])) if($_COOKIE['darkmode'] == 'null') echo 'style="display:block"'; else echo 'style="display:none"';?>><img src="images/moon.png" style="display:block"/></li>
        </div>
    </ul>
</nav>
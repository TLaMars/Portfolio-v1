<?php

class Controller
{
    public $router;
    public $params = [];

    public function __construct()
    {
        $this->router = new Router();
        $this->params = $this->router->getParams();
    }

    public function getParams()
    {
        return $this->params;
    }

    public function loadHead($page)
    {
        include_once('views/modules/head.php');
    }

    public function loadNav($page)
    {
        include_once('views/modules/nav.php');
    }

    public function loadFooter()
    {
        include_once('views/modules/footer.php');
    }
}
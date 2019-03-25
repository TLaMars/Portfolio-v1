<?php

class Router 
{
    public $params = [];
    public function __construct()
    {
        $url = ($this->parseUrl());

        if(!empty($url))
        {
            $this->createView($url[0]);
            unset($url[0]);
            $this->params = $url ? array_values($url) : [];
        }
        else {
            $this->createView('index');
        }
    }

    public function parseUrl()
    {
        if(isset($_GET['url']))
        {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }

    public function getParams()
    {
        return $this->params;
    }

    public function createView($view)
    {
        if(file_exists('views/' . $view . 'View.php'))
        {
            include_once('views/' . $view . 'View.php');
        } elseif (file_exists('views/errorPages' . $view . 'View.php')) {
            include_once('views/errorPages' . $view . 'View.php');
        } else {
            include_once('views/errorPages/error404View.php'); 
        }
    }
}
/*
class Router 
{
    public function returnParams()
    {
        $url = ($this->parseUrl());

        $controller = new Controller();
        if(file_exists('views/' . $url[0] . 'View.php'))
        {
            $controller->createView($url[0]);
            unset($url[0]);
            $url = $url ? array_values($url) : [];
            print_r($url);
            $controller->setParams($url);
        }
        else {
            include_once('views/errorPages/error404View.php');   
        }
    }

    public function parseUrl()
    {
        if(isset($_GET['url']))
        {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}*/
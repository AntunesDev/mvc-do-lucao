<?php

namespace Controllers;

use Core;

class HomeController extends Core\Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();
    }

    public function index()
    {
        $this->loadTemplate('home/home', []);
    }
}

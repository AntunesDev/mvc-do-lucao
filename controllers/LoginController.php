<?php

namespace Controllers;

use Core, Models;
use Exception;

class LoginController extends Core\Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->isLoggedOut();
        $this->loadTemplateLogin('Login/login', []);
    }

    public function login()
    {
        // Login validation
    }

    public function logout()
    {
        unset($_SESSION[SESSION_NAME]);
        die(header('Location: ' . BASE_URL));
    }

    public function extendSession()
    {
        $this->renewSession();
    }
}

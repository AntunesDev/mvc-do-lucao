<?php

namespace Core;

class Controller extends Acl
{
  public function __construct()
  {
    parent::__construct();
  }

  public function loadViewInTemplate($viewName, $viewData)
  {
    extract($viewData);
    include 'views/' . $viewName . '.php';
  }

  public function loadTemplate($viewName, $viewData)
  {
    include 'views/template.php';
  }

  public function loadTemplateLogin($viewName, $viewData)
  {
    include 'views/login.php';
  }
}

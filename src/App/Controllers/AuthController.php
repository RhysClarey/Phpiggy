<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\Paths;
use App\Services\ValidatorService;

class AuthController
{
    public function __construct(private TemplateEngine $view, private ValidatorService $validatorService)
    {
    }

    public function registerView()
    {
        echo $this->view->render("register.php", [
            'title' => 'Registration Page'
        ]);
    }

    public function register()
    {
        dd($_POST);
    }
}

<?php

declare(strict_types=1);

namespace App\Config;

use Framework\App;
use App\Middleware\{TemplateDataMiddleware, ValidatioNExceptionMiddleware, SessionMiddleware};

function registerMiddleware(App $app)
{
    $app->addMiddleware(TemplateDataMiddleware::class);
    $app->addMiddleware(ValidatioNExceptionMiddleware::class);
    $app->addMiddleware(SessionMiddleware::class);
}

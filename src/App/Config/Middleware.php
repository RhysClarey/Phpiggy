<?php

declare(strict_types=1);

namespace App\Config;

use Framework\App;
use App\Middleware\{TemplateDataMiddleware, ValidatioNExceptionMiddleware, SessionMiddleware, FlashMiddleware};

function registerMiddleware(App $app)
{
    $app->addMiddleware(TemplateDataMiddleware::class);
    $app->addMiddleware(ValidatioNExceptionMiddleware::class);
    $app->addMiddleware(FlashMiddleware::class);
    //This needs to be last so other middleware has access to this class.
    $app->addMiddleware(SessionMiddleware::class);
}

<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

class HomeController extends Controller
{
    public function __invoke(): InertiaResponse
    {
        return Inertia::render('Home/HomePage');
    }
}

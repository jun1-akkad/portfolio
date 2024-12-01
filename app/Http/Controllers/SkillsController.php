<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

class SkillsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): InertiaResponse
    {
        return Inertia::render('Skills/SkillsPage');
    }
}

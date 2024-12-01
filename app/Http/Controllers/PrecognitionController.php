<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\PrecognitionRequest;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

/**
 * Precognition
 */
class PrecognitionController extends Controller
{
    public function index(): InertiaResponse
    {
        return Inertia::render('Precognition/PrecognitionPage');
    }

    public function post(PrecognitionRequest $request): InertiaResponse
    {
        $validated = $request->validated();

        $payload = [
            'keyword' => ($validated['keyword'] ?? '').'!',
        ];

        return Inertia::render('Precognition/PrecognitionPage', $payload);
    }
}

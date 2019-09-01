<?php

namespace App\Http\Controllers;

use App\Services\FactorizationService;
use Illuminate\Http\Request;

class FactorizationController extends Controller
{
    /**
     * @var FactorizationService
     */
    private $factorizationService;

    /**
     * FactorizationController constructor.
     * @param FactorizationService $factorizationService
     */
    public function __construct(FactorizationService $factorizationService)
    {
        $this->factorizationService = $factorizationService;
    }

    public function factor(Request $request)
    {
        return response()->json(
            [
                'factors' => $this->factorizationService->factor((int)$request->route('num'))
            ]
        );
    }
}

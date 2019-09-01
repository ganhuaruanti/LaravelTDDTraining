<?php

namespace App\Http\Controllers;

use App\Services\TennisService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TennisController extends Controller
{
    /**
     * @var TennisService
     */
    private $tennisService;

    /**
     * TennisController constructor.
     * @param TennisService $tennisService
     */
    public function __construct(TennisService $tennisService)
    {
        $this->tennisService = $tennisService;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function tennis(Request $request)
    {
        return response()->json(
            $this->tennisService->tennis($request->input())
        );
    }
}

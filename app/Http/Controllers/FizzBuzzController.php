<?php


namespace App\Http\Controllers;


use App\Services\FizzBuzzService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FizzBuzzController
{
    /**
     * @var FizzBuzzService
     */
    private $fizzBuzzService;

    /**
     * FizzBuzzController constructor.
     * @param FizzBuzzService $fizzBuzzService
     */
    public function __construct(FizzBuzzService $fizzBuzzService)
    {
        $this->fizzBuzzService = $fizzBuzzService;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function fizzBuzz(Request $request)
    {
        return response()->json(
            [
                'data' => $this->fizzBuzzService->fizzBuzz((int)$request->route('num'))
            ]
        );
    }
}

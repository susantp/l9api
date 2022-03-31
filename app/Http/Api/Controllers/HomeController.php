<?php

declare(strict_types=1);

namespace App\Http\Api\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\HomeRepository;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    /**
     * @param HomeRepository $homeRepository
     */
    public function __construct(protected HomeRepository $homeRepository)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return response()->success($this->homeRepository->getAll(), 200);
    }
}

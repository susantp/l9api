<?php

declare(strict_types=1);

namespace App\Http\Api\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\HomeRepository;
use Artisan;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    /**
     * @param HomeRepository $homeRepository
     */
    public function __construct(protected HomeRepository $homeRepository)
    {
    }

    public function webIndex()
    {
        Artisan::call('inspire');
        $message = Artisan::output();
        return "<center><h1>{$message}</h1></center>";
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return response()->success($this->homeRepository->getHomeData(), 200);
    }
}

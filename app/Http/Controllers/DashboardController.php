<?php

namespace App\Http\Controllers;

use App\Core\Modules\AdminModule\Services\AdminMenuService\AdminMenuService;
use App\Core\Modules\AdminModule\Services\AdminWidgetService\AdminWidgetEvent;
use App\Core\Modules\AdminModule\Services\AdminWidgetService\AdminWidgetService;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard/Dashboard', [

        ]);
    }

}

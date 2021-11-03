<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

class Index extends Controller
{
    public function index()
    {
        return inertia('Index', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'age' => $this->getAge()
        ]);
    }

    private function getAge()
    {
        $start = Carbon::create(1980, 4, 30, 8, 30, 0);
        $end = Carbon::now();

        return $start->diff($end)->format('%Y years %m months and %d days old');

    }
}

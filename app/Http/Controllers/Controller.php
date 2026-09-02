<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Support\Facades\View;

abstract class Controller
{
    public function __construct()
    {
        $general = General::first()->toArray();

        View::share('general', $general);
    }
}

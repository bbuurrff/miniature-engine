<?php

namespace App\Http\Controllers;

use App\Models\Screens;
use Illuminate\Http\Request;

class ScreenListController extends Controller
{
    //
    public function index () {
        return Screens::all();
    }
}

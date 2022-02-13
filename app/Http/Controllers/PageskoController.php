<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class PageskoController extends Controller
{
    public function index(){
        return View("index");
    }
}

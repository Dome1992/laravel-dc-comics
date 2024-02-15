<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class MainController extends Controller
{
    public function index() {

        $comic = Comic :: all();
        return view('pages.index', compact ('comic'));
    }
}

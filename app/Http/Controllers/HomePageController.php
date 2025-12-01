<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(Items $items) {
        return view('home', [
            'items' => $items->latest()->paginate(10)
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function browse()
    {
        $menu = Menu::all();

        return view('menu/browse', [
            'menu' => $menu
        ]);
    }
}

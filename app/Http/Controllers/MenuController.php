<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
   public function index(Request $request) {
      $menus = Menu::query()->get();
      $data = ['menus' => $menus];
      return view('pages.menu', $data);
   }
}

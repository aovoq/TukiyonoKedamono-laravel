<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Menu;
use Illuminate\Support\Str;

class DashboardController extends Controller {

   public function index() {
      $menus = Menu::query()->get();
      $data = ['menus' => $menus];
      return view('dashboard.index', $data);
   }

   public function menu_create(Request $request) {
      $request->validate([
         'menu_name' => 'required',
         'menu_price' => 'required|integer',
         'image' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
      ]);

      $dir = 'menu_images';
      $original_file_extension = $request->file('image')->getClientOriginalExtension();
      $file_name = Str::uuid() . '.' . $original_file_extension;
      $request->file('image')->storeAs('public/' . $dir, $file_name);

      $menu = new Menu();
      $menu->name = $request->input('menu_name');
      $menu->price = $request->input('menu_price');
      $menu->path = 'storage/' . $dir . '/' . $file_name;
      $menu->save();

      $request->session()->regenerateToken();

      return redirect('/dashboard');
   }

   public function menu_delete(Request $request) {
      $dir = 'menu_images';
      $id = $request->input('id');
      $menu = new Menu();
      $target_data = $menu->find($id);
      $target_path = $dir . '/' . basename($target_data->path);
      Storage::disk('public')->delete($target_path);
      $target_data->delete();

      return redirect('/dashboard');
   }
}

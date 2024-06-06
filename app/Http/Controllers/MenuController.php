<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Merchant;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all(); // Fetch all menu data
        return view('Admin.menu.index', compact('menus'));
    }

    public function tambah()
    {
        $merchants = Merchant::all(); // Assuming you want to fetch all merchants
        return view('Admin.menu.tambah', compact('merchants'));
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirimkan
        $request->validate([
            'nama_menu' => 'required|string',
            'merchant_id' => 'required|exists:merchants,id',
            'deskripsi' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'harga' => 'required|numeric',
            'kategori' => 'nullable|string',
        ]);

        dd(new )
        // Proses penyimpanan data menu
        $menu = new Menu();
        $menu->nama_menu = $request->nama_menu;
        $menu->merchant_id = $request->merchant_id;
        $menu->deskripsi = $request->deskripsi;
        
        // Menyimpan file foto ke dalam direktori 'public/menus'
        $menu->foto = $request->file('foto')->store('menus', 'public');
        
        $menu->harga = $request->harga;
        $menu->kategori = $request->kategori;
        $menu->save();

        // Redirect ke halaman index menu setelah menyimpan berhasil
        return redirect()->route('menu_index')->with('success', 'Menu berhasil ditambahkan.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Menggunakan metode Auth
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        // fungsi __contruct() adalah untuk otomatis mengeksekusi method didalamnya.
        // dengan adanya middleware maka untuk menembus fungsi profile() harus melalui middleware('auth')
        // Dalam kata lain harus login terlebih dahulu, jika tidak maka akan tetap pada halaman login
        // $this->middleware('auth');
    } 

    public function profile()
    {
        // die('halaman profile disini !');
        // var_dump(Auth::user()->name);
        return view('profile');
    }
}

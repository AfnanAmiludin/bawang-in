<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RidirectController extends Controller
{
    public function rolePage()
    {
        $user = Auth::user()->id;
        $userRole = User::find($user)->userRole()->first();
        if ($userRole->name == "penjual") {
            return redirect()->route('seller-add-product');
        } else if ($userRole->name == "pembeli") {
            return redirect()->route('home-page');
        }
    }
}

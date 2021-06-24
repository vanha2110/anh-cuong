<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $cart = Order::query()->getModel()
            ->where('user_id', $user->id)
            ->where('status', '=', 0)
            ->sum('quantity');

        $ordered = Order::query()->getModel()
            ->where('user_id', $user->id)
            ->where('status', '=', 1)
            ->sum('quantity');
        return view('user.home', compact('cart', 'ordered'));
    }
}

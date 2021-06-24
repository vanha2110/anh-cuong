<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $user = auth()->user();
        $orders = Order::query()->getModel()
            ->with('product')
            ->where('user_id', $user->id)
            ->where('status', '=', 0)
            ->get();

        return view('user.order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'product_id' => 'required',
            'quantity' => 'required',
            'total_price' => 'required'
        ]);

        $product = Order::query()
            ->where('user_id', $user->id)
            ->where('product_id', $request->product_id)
            ->first();
        if ($product) {
            $product->update([
                'quantity' =>  $request->quantity + $product->quantity,
                'total_price' => $request->total_price + $product->quantity,
                'order_at' => now()
            ]);
        } else {
            Order::query()->create([
                'user_id' => $user->id,
                'product_id' => $request->product_id,
                'quantity' =>  $request->quantity,
                'total_price' => $request->total_price,
                'order_at' => now()
            ]);
        }

        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $order = Order::query()->getModel()->findOrFail($id);
        $order->delete();

        return redirect()->route('order.index');
    }
}

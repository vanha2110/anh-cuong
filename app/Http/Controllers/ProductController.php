<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    /**
     * Index
     * @return Factory|View
     */
    public function index()
    {
        $products = Product::query()->getModel()
            ->get();
        return view('user.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('user.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slot' => 'required',
            'price' => 'required',
            'description' =>'required|string'
        ]);

        $product = Product::query()->getModel()->create([
            'name' => $request->name,
            'slot' => $request->slot,
            'price' => $request->price,
            'description' => $request->description
        ]);

        return redirect()->route('admin.product.index');
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
     * @return Factory|View
     */
    public function edit($id)
    {
        $product = Product::query()->getModel()->findOrFail($id);

        return view('user.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slot' => 'required',
            'price' => 'required',
            'description' =>'required|string'
        ]);

        $product = Product::query()->getModel()->findOrFail($id);

        $product->update([
            'name' => $request->name,
            'slot' => $request->slot,
            'price' => $request->price,
            'description' => $request->description
        ]);

        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $product = Product::query()->getModel()->findOrFail($id);
        $product->delete();

        return redirect()->route('admin.product.index');
    }
}

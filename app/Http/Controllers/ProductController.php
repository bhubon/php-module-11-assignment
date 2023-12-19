<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = DB::table('products')->orderBy('id', 'desc')->paginate(10);
        return view('product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);

        $product = DB::table('products')->insert($validated);
        if ($product) {
            return redirect()->route('product.index')->with('success', 'Product Successfully created');
        } else {
            return redirect()->back()->with('error', 'Somehing wen\'t wrong ');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = DB::table('products')->where('id',$id);
        return view('product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);
        DB::table('products')
            ->where('id', $id)
            ->update($validated);
        return redirect()->back()->with('success', 'Product successfully updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('products')
            ->where('id', $id)
            ->delete();
        return redirect()->back()->with('success', 'Product successfully deleted!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public function index()
    {
        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->select('orders.*', 'products.name as product_name', 'products.price as product_price')
            ->orderBy('orders.id', 'desc')
            ->paginate(10);
        return view('orders.index', ['orders' => $orders]);
    }

    /**
     * Sell product
     *
     */
    public function view(string $id)
    {
        $product = DB::table('products')->find($id);
        return view('product.sell', ['product' => $product]);
    }

    public function sale(Request $request, string $id)
    {
        $request->validate([
            'quantity' => 'required|string|min:1'
        ]);
        $product = Db::table('products')->where('id', $id)->first();
        $sale = DB::table('orders')->insert([
            'quantity' => $request->quantity,
            'total_price' => ($request->quantity * $product->price),
            'product_id' => $id,
        ]);

        if ($sale) {
            DB::table('products')->where('id', $id)->decrement('quantity', $request->quantity);
            return redirect()->route('product.index')->with('success', 'Product successfully sale!');
        }
    }
}

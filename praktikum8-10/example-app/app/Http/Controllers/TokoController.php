<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;

class TokoController extends Controller
{
    public function index ( )
    {
        return view('toko/index');
    }

    public function detail ( )
    {
        return view('toko/detail');
    }

    public function about ( )
    {
        return view('toko/about');
    }

    public function admin ( )
    {
        $products = Product::all( );
        return view('toko/admin', compact('products'));
    }

    public function customer ( )
    {
        $customers = Customer::all( );
        return view('toko/customer', compact('customers'));
    }
    //FUNCTION FOR CUSTOMER
    public function new ( )
    {
        return view('toko/new');
    }

    public function member (Request $request)
    {
        $request->validate ([
            'name' => 'required',
            'address' => 'required',
            'no_hp' => 'required',
        ]);

        Customer::create($request->all()); //pemanggilan Customer terkoneksi dengan database
        return redirect( )->route('customer.customer')->with('success', 'Customer Berhasil Disimpan');
    }

    public function editc (Customer $customer)
    {
        return view('toko/editc', compact('customer'));
    }

    public function updates (Request $request, Customer $customer)
    {
        $request->validate ([
            'name' => 'required',
            'address' => 'required',
            'no_hp' => 'required',
        ]);

        $customer->update($request->all());
        return redirect( )->route('customer.customer')->with('update', 'Customer Berhasil Diperbarui');
    }

    public function destroys (Customer $customer)
    {
        $customer->delete();

        return redirect( )->route('customer.customer')->with('delete', 'Customer Berhasil Dihapus');
    }


    // FUNCTIONS FOR PRODUCT
    public function create ( )
    {
        return view('toko/create');
    }

    public function store (Request $request)
    {
        $request->validate ([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        Product::create($request->all()); //pemanggilan product terkoneksi dengan database
        return redirect( )->route('produk.admin')->with('success', 'Produk Berhasil Disimpan');
    }

    public function edit (Product $product)
    {
        return view('toko/edit', compact('product'));
    }

    public function destroy (Product $product)
    {
        $product->delete();

        return redirect( )->route('produk.admin')->with('delete', 'Produk Berhasil Dihapus');
    }

    public function update (Request $request, Product $product)
    {
        $request->validate ([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product->update($request->all());
        return redirect( )->route('produk.admin')->with('update', 'Produk Berhasil Diperbarui');
    }
}

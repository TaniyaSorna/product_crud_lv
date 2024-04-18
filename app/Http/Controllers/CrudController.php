<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('cruds')->get();
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $price = $request->price;
        $qty = $request->qty;

        if ($request->hasfile('img')) {
            $img = $request->file('img');
            $image_name = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('upload'), $image_name);
            $img_url = ('upload/' . $image_name);
        }

        DB::table('cruds')->insert([
            'Product_Name' => $name,
            'Product_Price' => $price,
            'Product_Qty' => $qty,
            'Product_Img' => $img_url
        ]);
        return redirect()->route('crud.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = DB::table('cruds')->find($id);
        return view('show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = DB::table('cruds')->find($id);
        return view('edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->Product_Name;
        $price = $request->Product_Price;
        $qty = $request->Product_Qty;
        if ($request->hasfile('img')) {
            $img = $request->file('img');
            $image_name = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('upload'), $image_name);
            $img_url = ('upload/' . $image_name);
        }
        DB::table('cruds')->where('id', '=', $id)->update([
            'Product_Name' => $name,
            'Product_Price' => $price,
            'Product_Qty' => $qty,
            'Product_Img' => $img_url
        ]);
        return redirect()->route('crud.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('cruds')->where('id', '=', $id)->delete();
        return redirect()->route('crud.index');
    }
}

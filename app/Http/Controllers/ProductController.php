<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductInsertFormRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductInsertFormRequest $request)
    {
        $files = $request->file('file');
        $fileAry = array();
        foreach($files as $file){
            $filename = uniqid() . '_' .$file->getClientOriginalName();
            array_push($fileAry, $filename);
            $file->move(public_path('/uploads/'), $filename);
        }

        Product::create([
            'title' => $request->get('title'),
            'price' => $request->get('price'),
            'description' => $request->get('description'),
            'imgs' => serialize($fileAry)
        ]);

        //dd($fileAry);

        return redirect('products/create')->with('status', 'Data Insert Successfully!');
    

        // for($i = 0; $i < count($fileAry); $i++){
        //     echo $fileAry[$i] . '<br>';
        // }

        // $file = $request->file('file');
        // $filename = uniqid() . '_' .$file->getClientOriginalName();

        // $file->move(public_path().'/uploads/', $filename);
        // Storage::put('uploads/'.$file->getClientOriginalName(), file_get_contents($file));

        // Product::create([
        //     'title' => $request->get('title'),
        //     'price' => $request->get('price'),
        //     'description' => $request->get('description'),
        //     'imgs' => $filename,
        // ]);

        // return redirect('products/create')->with('status', 'Data Insert Successfully!');
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
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

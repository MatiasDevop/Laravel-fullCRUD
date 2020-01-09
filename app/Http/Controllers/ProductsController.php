<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductsRequest;
use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view("products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return  view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductsRequest $request)//in place of Request you can create your own validatorRequest and reusing this
    {
        //
        //$this->validate($request, ['Section'=>'required', 'Country_birth'=>'required', "NameArticul"=>'required']);
        //return view('products.insert');
       

       /* $product = new Product;
        $product->NameArticul = $request->NameArticul;
        $product->Section = $request->Section;
        $product->Price = $request->Price;
        $product->Datetime = $request->Datetime;
        $product->Country_birth = $request->Country_birth;
       
        $product->save();*/

        $entrance=$request->all();

        if($file=$request->file('file')){
            
            $name = $file->getClientOriginalName();

            $file->move('images', $name);

            $entrance['ruta']=$name;

        }
        Product::create($entrance);
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
        $product = Product::findOrFail($id);
        return view('products.show', compact("product"));
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
        $product = Product::findOrFail($id);
        return view('products.edit', compact("product")); //check it well and verify tha it 
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
        $product = Product::findOrFail($id);

        $product->update($request->all());

        return redirect("/products");
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
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect("/products");
    }
}

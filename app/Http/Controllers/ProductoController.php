<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $producto =Producto::all();
       return view('producto.index',compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if ($request->hasFile('image')) {
          $file =$request ->file('image');
          $name = time().$file->getClientOriginalName();
          $file->move(public_path().'/images/',$name);
         
       }
        $producto = new Producto();
        $producto ->name=$request ->input('name');
        $producto ->cantidad=$request ->input('cantidad');
        $producto ->image=$name;
        $producto-> save();
     
        return 'saved';
        //return $request->input('name');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //$producto= Producto::where('slug','=',$slug)->firstorFail();

        return view('producto.show',compact('producto'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
       return view('producto.edit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Producto $producto)
    {
        

        $producto ->fill($request->except('image'));
        if ($request->hasFile('image')) {
          $file =$request ->file('image');
          $name = time().$file->getClientOriginalName();
             $producto ->image=$name;
          $file->move(public_path().'/images/',$name);
         
       }
       
        $producto->save();
        return 'updated';
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

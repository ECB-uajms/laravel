<?php

namespace App\Http\Controllers;





use Illuminate\Http\Request;

class PruebaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function prueba($param)
    {
        //
        return 'Estasdasd asdasdasdasd'.$param;
    }
public function show()
    {
        return view('welcome');
        }
    public function index($name,$ap='apellido')
    {
        return 'hola qefqwfqwfq'.$name.''.$ap;
        }
    public function index2($param)
    {   
        //
        return 'Estasdasd asdasdasdasd'.$param;
    }



}

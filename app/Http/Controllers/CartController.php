<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
class CartController extends Controller
{
		public function __construct()
		{
			if (!\Session::has('cart')) \Session::put('cart',array());
				# code...
			
		}


    //Show cart
		public function show(){
			$cart = \Session::get('cart');
			return view('carrito.index',compact('cart'));

		}
		public function index()
    {

      
    }




    //Add item
		public function add(Producto $producto){
			$cart =\Session::get('cart');
			$producto->cantidad=1;
			$cart[$producto->slug]=$producto;
			\Session::put('cart',$cart);
			return redirect()->route('cart-show');
		}	
    //Delete item
		 public function delete(Producto $producto)
    {
       $cart =\Session::get('cart');
       unset($cart[$producto->slug]);
       \Session::put('cart',$cart);
			return redirect()->route('cart-show');
    }
    //Update item
 public function update(Producto $producto, $cantidad)
    {
       $cart =\Session::get('cart');
       $cart[$producto->slug]->cantidad=$cantidad;
       \Session::put('cart',$cart);
			return redirect()->route('cart-show');
    }



    //Trash item
				public function trash()
				    {
				      \Session::forget('cart');
							return redirect()->route('cart-show');
				    }



    //Total
}

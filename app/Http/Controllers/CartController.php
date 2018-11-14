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
			$total=$this->total();
			return view('carrito.index',compact('cart','total'));

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
		    public function total(){
		    	$cart =\Session::get('cart');
		    	$total=0;
		    	foreach ($cart as $item) {
		    		$total +=$item->precio*$item->cantidad;
		    		
		    	}
		    	return $total;
		    }




		    public function orderDetail(){
		    	if(count(\Session::get('cart'))<=0) return redirect()->route('home');
		    	$cart=\Session::get('cart');
		    	$total=$this->total();
		    	return view('carrito.order-detail',compact('cart','total'));

		    }
}

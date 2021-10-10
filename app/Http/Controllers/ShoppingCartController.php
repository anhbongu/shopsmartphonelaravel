<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CartModel;
use Illuminate\Support\Facades\Auth;

class ShoppingCartController extends MainController
{
    //mua hàng
    public function order(Request $request){
        if(Auth::check()){
            // dd($request->all());
            $url = $request->segment(3);
            $arrUrl = explode('-', $url);
            $pro_price = array_pop($arrUrl);
            $pro_id = array_shift($arrUrl);

            $cart = session()->get('cart');
            if(empty($cart)){
                $cart['quantity'][$pro_id] = 1;
                $cart['price'][$pro_id] = $pro_price;
            }else{
                if(key_exists($pro_id, $cart['quantity'])){
                    $cart['quantity'][$pro_id] += 1;
                    $cart['price'][$pro_id] = $pro_price * $cart['quantity'][$pro_id];
                }else{
                    $cart['quantity'][$pro_id] = 1;
                    $cart['price'][$pro_id] = $pro_price;               
                }
            }
            $totalQuantity = array_sum($cart['quantity']);

            session()->put('totalQuantity', $totalQuantity);
          

            session()->put('cart', $cart);


            return redirect()->back();            
        }else{
            session()->flash('error', 'vui lòng đăng nhập để mua hàng');
            return redirect()->route('login');
        }


    }


    //danh sách giỏ hàng
    public function cart(){
        $user = new User();
        $cart = session()->get('cart');
        $result = $user->listItem($cart, ['task'=>'cart-info']);
        return view('cart.index', [
            'cart'=>$result
        ]);
    }


    //mua hàng
    public function buy(Request $request){
        $cart = new CartModel();
        $data = $request->input('form');
        $getIdName = Auth::user()->id;

        $cart->id = rand();
        $cart->order_name   = $getIdName;
        $cart->product_ids  = json_encode($data['id']);
        $cart->prices       = json_encode($data['price']);
        $cart->quantities   = json_encode($data['quantity']);
        $cart->names        = json_encode($data['name'], JSON_UNESCAPED_UNICODE);
        $cart->pictures     = json_encode($data['picture']);
        $cart->save();
        session()->put('totalQuantity', 0);
        session()->forget('cart');
        return redirect()->route('home');

    }

    //delete 1 san pham 
    
    public  function deleteCart($id=null){
        if(isset($id)){
            $cart = session()->get('cart');
            unset($cart['quantity'][$id]);
            unset($cart['price'][$id]);

            $totalQuantity = array_sum($cart['quantity']);

            session()->put('totalQuantity', $totalQuantity);

            session()->put('cart', $cart);
            return redirect()->back();            
        }else{
            session()->put('totalQuantity', 0);
            session()->forget('cart');
            return redirect()->back();     
        }

   
    }

    public function history(){
        $id = Auth::id(); 
        $history = CartModel::where('order_name', $id)->get();  

        
        return view('cart.history', [
            'history'=>$history
        ]);
    }
}

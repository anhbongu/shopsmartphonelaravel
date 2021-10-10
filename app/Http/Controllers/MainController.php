<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\User;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{
    public function __construct(){

        $this->middleware(function ($request, $next){
            $category = CategoryModel::limit(4)->get();

            $user = new User();
            $cart = session('cart');
            $cart = $user->listItem($cart, ['task'=>'cart-info']);

           
            View::share([
                'category'=> $category,
                'cart'=>$cart
            ]); 
            return $next($request);
        });






    }

}

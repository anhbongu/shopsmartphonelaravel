<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use DB;

class HomeController extends MainController
{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $product_hot    = ProductModel::where('pro_active', 1)->limit(8)->get();
        $article        = DB::table('articles')->where('a_active', 1)->limit(3)->get();


        return view('home.index', [
            'pro_hot'=>$product_hot,
            'article'=>$article
        ]);
    }
}

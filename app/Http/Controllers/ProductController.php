<?php

namespace App\Http\Controllers;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use DB;


class ProductController extends MainController
{
    public function details(Request $request){
        $url = $request->segment(2);
        $arrUrl = explode('-', $url);
        $id = array_pop($arrUrl);
        $product = ProductModel::where('id', $id)->find($id);

        $rating = DB::table('ratings')->where('ra_product_id', $id)->orderby('id', 'DESC')->get();

        return view('product.details', [
            'product'=>$product, 
            'rating'=>$rating
        ]);
    }
}

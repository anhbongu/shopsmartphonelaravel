<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\CategoryModel;

class CategoryController extends MainController
{
    public function getListProduct(Request $request){

        $url = $request->segment(2);
        $arrUrl = explode('-', $url);
        $id = array_pop($arrUrl);


        $product            = ProductModel::where('pro_category_id', $id);
        if($request->price){
            switch ($request->price) {
                case '1':
                    $product->where('pro_price', '<',1000000);
                    break;
                case '2':
                    $product->whereBetween('pro_price', [1000000, 3000000]);
                    break;
                case '3':
                    $product->whereBetween('pro_price', [3000000, 5000000]);
                    break;
                case '4':
                    $product->whereBetween('pro_price', [5000000, 7000000]);
                    break;
                case '5':
                    $product->whereBetween('pro_price', [7000000, 10000000]);
                    break;
                case '6':
                    $product->where('pro_price', '>',10000000);
                    break;

            }
        }

        if($request->orderby){
            switch ($request->orderby) {
                case ('price_desc'):
                     $product->orderby('pro_price', 'desc');
                    break;
                case ('price_asc'):
                     $product->orderby('pro_price', 'asc');
                    break;

            }
        }

        $product = $product->paginate(3);




        $cate_name          = CategoryModel::where('id', $id)->find($id);
        return view('product.index', [
            'product'=>$product,
            'cate_name'=>$cate_name
        ]);
    }


}

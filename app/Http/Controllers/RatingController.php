<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RatingModel;
use App\Models\ProductModel;
use DB;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function saveRating(Request $request, $id){
         if($request->ajax()){
            $username = Auth::user()->name;
            
            $rating = new RatingModel();
            $rating->ra_product_id = $id;
            $rating->ra_number = $request->number;
            $rating->ra_content = $request->content;
            $rating->ra_user = $username;
            $rating->save();

            $product = ProductModel::find($id);
            $product->pro_total_rating += $request->number;
            $product->pro_total_number += 1; 
            $product->save();

            $html = view('component.rating', ['username'=>$username, 'content'=>$request->content])->render();


            return response()->json( $html);

        }



        
    }


}

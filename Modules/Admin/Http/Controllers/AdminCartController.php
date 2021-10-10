<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\CartModel;
use App\Models\ProductModel;
use DB;

class AdminCartController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $cart = DB::table('carts')
                    ->join('users', 'users.id', '=', 'carts.order_name')
                    ->select('carts.*', 'users.name as username')
                    ->get();



        return view('admin::cart.index', [
            'cart'=>$cart
        ]);
    }

    public function viewCart(Request $request, $id){

        if($request->ajax()){
            $order = CartModel::where('id', $id)->first();
            $html = view('admin::component.order', ['order'=>$order])->render();
      
            return response()->json($html);
        }
    }

    public function action(Request $request,$action, $id){
        $cart = CartModel::find($id);
        switch ($action) {
            case 'delete':
                //cập nhật số lượng sản phẩm
                $products = $request->value;//lấy id và số lượng
                $status = $request->status;//khi hang dang van chuyen
                $products = explode("and",$products); //tách thành mảng chứa id-số lượng
                foreach ($products as $value) {
                    $newValue = explode("-",$value);
                    $product = ProductModel::find($newValue[0]);
                    if($status==2){
                        $product->pro_number += $newValue[1]; //admin xác nhận
                        $product->pro_hot    -= 1; //admin xác nhận
                    }
                    
                    $product->save();
                }


                //xoas
                $cart->delete();
                return redirect()->back();
                break;
             case 'changstatus':

                $status = ($request->status)==1 ? 2 : 1;
                $cart->status = $status;
                $cart->save();

                //cập nhật số lượng sản phẩm
                $products = $request->value;//lấy id và số lượng

                $products = explode("and",$products); //tách thành mảng chứa id-số lượng
                foreach ($products as $value) {
                    $newValue = explode("-",$value);
                    $product = ProductModel::find($newValue[0]);
                    if($status==2){
                        $product->pro_number -= $newValue[1]; //admin xác nhận
                        $product->pro_hot    += 1; //admin xác nhận
                    }else if($status==1){
                        $product->pro_number += $newValue[1]; //admin hủy xác nhận
                        $product->pro_hot    -= 1; //admin hủy xác nhận
                    }
                    
                    $product->save();
                }


                // dd($product);



                return redirect()->back();
                break;
                

        }


    }

}

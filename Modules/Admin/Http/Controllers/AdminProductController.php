<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestProduct;
use DB;
use App\Models\ProductModel;
use Illuminate\Support\Str;



class AdminProductController extends Controller
{

    public function index(Request $request)
    {   
 
        $result  = DB::table('products')
                                ->join('categories', 'products.pro_category_id', '=', 'categories.id')
                                ->select('products.*', 'categories.c_name as category_name');

        //============================tiềm kiếm
        if(isset($request->name)) $result = $result->where('pro_name', 'like', '%'.$request->name.'%');
        if(isset($request->select_filter)) $result->where('products.pro_category_id', '=', $request->select_filter);
                             
          
        $product = $result->paginate(10);           



        $category = $this->getCategory();
        return view('admin::product.index', [
            'product'=>$product, 
            'category'=>$category
        ]);
    }

    public function create(){
        $category = $this->getCategory();
        return view('admin::product.create', [
            'category'=>$category

        ]);
    }

    public function store(RequestProduct $request){

        $this->insertOrUpdate($request);
        return redirect()->route('admin.product');
        
    }


    public function edit($id){
        $product = ProductModel::find($id);
        $category = $this->getCategory();



        return view('admin::product.edit', [
            'product'=>$product,
            'category'=>$category
        ]);     
    }


    public function update(RequestProduct $request, $id){
       $this->insertOrUpdate($request, $id);
        return redirect()->back();
    }




    public function insertOrUpdate($request, $id=""){
        $product = new ProductModel();


        if($id){
            //update
            $product = ProductModel::find($id);
            $get_img =  $request->file('picture'); 
            if($get_img){
                $file = 'public/uploads/product/'.$request->pro_picture_hidden;
                $new_img = rand().'.'.$get_img->getClientOriginalExtension();
                $product->pro_avatar = $new_img;
                $uploadPath = "public/uploads/product";
                $get_img->move($uploadPath, $new_img);               
                if(file_exists($file)){
                    unlink($file);
                }

         
            }
        }else{

            //insert
            $get_img =  $request->file('picture'); 
            if($get_img){
                $new_img = rand().'.'.$get_img->getClientOriginalExtension();
                $product->pro_avatar = $new_img;

                $uploadPath = "public/uploads/product";
                $get_img->move($uploadPath, $new_img);
            }          
        }

        $product->pro_name = $request->pro_name;
        $product->pro_slug = Str::slug($request->pro_name);
        $product->pro_description = $request->pro_description;
        $product->pro_content = $request->pro_content;
        $product->pro_title_seo = $request->pro_title_seo;
        $product->pro_description_seo = $request->pro_description_seo;
        $product->pro_category_id = $request->pro_category_id;
        $product->pro_price = $request->pro_price;
        $product->pro_sale = $request->pro_sale; 
        $product->pro_number = $request->pro_number; 
        $product->save(); 




    }

    //active
    public function changStatus($id){
        echo $id;
    }

    public function action(Request $request, $action,  $id){
        $product = ProductModel::find($id);

        switch ($action) {
            case 'delete':
                $product->delete();
                return redirect()->back();
                break;
            case 'changstatus':
                $status = ($request->status==1) ? 0 : 1;
                $product->pro_active = $status ;
                $product->save();
                return redirect()->back();
                break;
            case 'changhot':
                $status = ($request->status==1) ? 0 : 1;
                $product->pro_hot = $status ;
                $product->save();
                return redirect()->back();
                break;
        }
        
    }

    public function getCategory(){
        return $category = DB::table('categories')->select('id','c_name')->get();

       
    }
}

<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestCategory;
use App\Models\CategoryModel as MainModel;
use Illuminate\Support\Str;
use DB;
class AdminCategoryController extends Controller
{

    protected $pathView = 'admin::category.';
    public function __construct(MainModel $model){

    }

    public function index()
    {
        $category = MainModel::select('id', 'c_name', 'c_active', 'c_title_seo')->get(10);

        return view($this->pathView.'index', [
            'category'=>$category
        ]);
    }


    public function create()
    {
        return view($this->pathView.'create');
    }

    public function store(RequestCategory $request){
        $this->inserOrUdate($request);
        session()->flash('success', 'Thêm thành công!');
        return redirect()->back();

    }

    public function edit($id){
        $category = MainModel::find($id);
        // $category = MainModel::where('id',$id)->first();

        return view($this->pathView.'edit', [
            'category'=>$category
        ]);
    }

    public function update(RequestCategory $request){
        $this->inserOrUdate($request, $request->id);
        return redirect()->back()->with('success', 'Cập nhật thành công!');
    }

    public function inserOrUdate($request, $id =''){
        //create
        $category = new MainModel();
        //update
        if($id){
            $category = MainModel::find($id);
        }
       
        $category->c_name = $request->name;
        $category->c_slug = Str::slug($request->name);
        $category->c_icon = $request->icon;
        $category->c_title_seo = $request->meta_title ? $request->meta_title : $request->name;
        $category->c_description_seo = $request->meta_description;
        $category->save();
    }

    public function action(Request $request, $action, $id){
        if($action){
            $category = MainModel::find($id);
            switch ($action) {
                case ('delete'):
                    $category->delete();
                    $message = "Xóa dữ liệu thành công!";
                    break;
                

                default:
                    break;
            }   
            return redirect()->back()->with('error', $message);         
        }

    }



 
}

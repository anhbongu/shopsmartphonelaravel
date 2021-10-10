<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\user;
use App\Http\Requests\RequestUser;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $user = User::get();

        return view('admin::user.index',[
            'user'=>$user
        ]);
    }

    public function create(){
        return view('admin::user.create');
    }

    public function store(RequestUser $request){
        $this->insertOrUpdate($request);
        return redirect()->route('admin.user');
        
    }


    public function edit($id){
        $user = User::find($id);

        return view('admin::user.edit', [
            'user'=>$user
        ]);
    }


    public function update(RequestUser $request, $id){
       $this->insertOrUpdate($request, $id);
        return redirect()->back();
    }




    public function insertOrUpdate($request, $id =''){
        //create
        $user = new user();
        //update
        if($id){
            $user = User::find($id);
        }else{
            $user->password = bcrypt($request->password) ;
        }
       
        $user->name     = $request->name;
        
        $user->email = $request->email;
        $user->phone = $request->phone;

        $user->save();
    }


    public function action(Request $request, $action,  $id){
        $user = user::find($id);

        switch ($action) {
            case 'delete':
                $product->delete();
                return redirect()->back();
                break;
            case 'changstatus':
                $status = ($request->status==1) ? 0 : 1;
                $user->active = $status;

                $user->save();
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

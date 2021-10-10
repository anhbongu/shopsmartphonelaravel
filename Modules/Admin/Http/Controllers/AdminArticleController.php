<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\ArticleModel;
use App\Http\Requests\RequestArticle;
use Illuminate\Support\Str;


class AdminArticleController extends Controller
{

    public function index(Request $request)
    {
        $article = new ArticleModel();
        if(isset($request->fillter)){
            $article = $article->where('a_name', 'like', '%'.$request->fillter.'%');
        }

        $article =  $article->paginate(10); 
        return view('admin::article.index', [
            'article'=>$article
        ]);
    }

    public function create(){
        return view('admin::article.create');
    }

    public function store(RequestArticle $request){
        $this->insertOrUpdate($request);
        session()->flash('success', 'Thêm thành công!');
        return redirect()->back();
    }

    public function edit($id){
        $article = ArticleModel::find($id);
        return view('admin::article.update', [
            'article'=>$article
        ]);
    }
    public function update(RequestArticle $request, $id){
        $this->insertOrUpdate($request, $id);
        session()->flash('success', 'Cập nhật thành công!');
        return redirect()->back();
    }

    public function insertOrUpdate($request, $id=''){
        $article = new ArticleModel();
        if($id){
            $article = ArticleModel::find($id);
        }

        $article->a_name = $request->a_name;
        $article->a_slug = Str::slug($request->a_name);
        $article->a_description = $request->a_description;
        $article->a_content = $request->a_content;
        $article->a_description_seo = $request->a_description_seo;
        $article->a_title_seo = $request->a_title_seo;
        $article->save();
    }

    public function action(Request $request,$action, $id){
        $article = ArticleModel::find($id);

        switch ($action) {
            case ('delete'):
                $article->delete();
                return redirect()->back();
                break;
            case('changestatus'):
                $status = ($request->status==1) ? 0 : 1;
                $article->a_active =  $status; 
                $article->save();
                return redirect()->back();
                break;
        }
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\ArticleModel;
use Illuminate\Http\Request;


class ArticleController extends MainController
{   
    public function index(){
        $article = ArticleModel::paginate(10);
        return view('article.index', [
            'article'=>$article
        ]);
    }

    public function details(Request $request){
        $id = \App\Helpers\URL::getIdUrl($request, 2);
        $article = ArticleModel::find($id);
        return view('article.details', [
            'article'=>$article
        ]);

    }
    
}

<?php

namespace App\Http\Controllers;

use App\Article;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function add() {
        return view('articles.add');
    }
    public function store(Request $request) {
        $this->validate(request (), [
            'title' => 'required',
            'demo' => 'required',
            'text' => 'required'
        ]);
        Article::create([
            'title' => $request['title'],
            'demo' => $request['demo'],
            'text' => $request['text']
        ]);
        return redirect('/');
    }
    public function index() {
        $articles = Article::latest()->paginate(6);
        return view('index', compact('articles'));
    }
    public function detail(Article $article) {
        return view('articles.detail', compact('article'));
    }

}

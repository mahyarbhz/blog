<?php

namespace App\Http\Controllers;

use App\Article;
use Hekmatinasser\Verta\Verta;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function add() {
        return view('articles.add');
    }
    public function store(Request $request) {
        $this->validate(request (), [ // Validating
            'title' => 'required', // Validating
            'demo' => 'required', // Validating
            'text' => 'required' // Validating
//           Picture Input has no Validate
        ]);

        $file = $request->file('pic');    // Picture Upload
        if (!empty($file)) {
            $filename = time() . "-" . $file->getClientOriginalName();    // Picture Upload
            $path = public_path('/img/Uploads');    // Picture Upload
            $file->move($path,$filename);    // Picture Upload
        } else
            $filename = 'lorempixel.com.jfif';

        Article::create([
            'user_id' => auth()->user()->id,
            'title' => $request['title'],
            'demo' => $request['demo'],
            'text' => $request['text'],
            'image' => '/img/Uploads/'.$filename
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

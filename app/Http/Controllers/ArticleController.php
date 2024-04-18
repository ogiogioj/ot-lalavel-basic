<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EditArticleRequest;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Requests\CreateArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Http\Requests\DestroyArticleRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ArticleController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth")->except(["index", "show"]);
    }

    public function create()
    {
        return view('articles/create');
    }

    public function store(CreateArticleRequest $request)
    {


        $input =  $request->validated();

        Article::create([
            'body' => $input['body'],
            'user_id' => Auth::id()
        ]);

        return redirect()->route('articles.index');
    }

    public function index(Request $request)
    {
        $q = $request ->input('q');


        $articles = Article::with('user')
            ->withCount('comments')
            ->withExists(
                ['comments as recent_comments'=> function($query){
                    $query->where('created_at','>',Carbon::now()->subDay());
                }])
            ->when($q, function($query,$q){
                $query->where('body','like',"%$q%")
                ->orwhereHas('user',function(Builder $query) use($q){
                    $query->where('username','like',"%$q%");
            });
        })
            ->latest()
            ->paginate();
        return view(
            'articles.index',
            [
                'articles' => $articles,
                'q' => $q,
            ]
        );
    }


    public function show(Article $article)
    {

        $article->load('comments.user');
        $article->loadCount('comments');
     //   $article->recent_comments();

        return view('articles.show', ['article' => $article]);


    }



    public function edit(EditArticleRequest  $request, Article $article)
    {


        return view('articles.edit', ['article' => $article]);
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {



        $input =  $request->validated();

        $article->body = $input['body'];
        $article->save();

        return redirect()->route('articles.index');
    }

    public function destroy(DestroyArticleRequest $request, Article $article)
    {

        $article->delete();

        return redirect()->route('articles.index');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Articles extends Model
{
    /**
     * Champs fillables
     *
     * @var array
     */
    protected $fillable = ['title','content'];

    /**
     * Table à modifier
     *
     * @var string
     */
    protected $table = "articles";

    public static function create(\Illuminate\Http\Request $request)
    {
        $article = new Articles();
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->author_id = Auth::id();
        if ($article->save()) {
            echo 'cok';
            exit();
        } else {
            echo "non";
            exit();
        }
    }

    public function index()
    {
        $articles = Articles::all();
        return $articles;
    }
}

<?php

namespace App\Http\Controllers;

use App\Question;
use Facade\FlareClient\Http\Response;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showPosts()
    {
        $posts = Question::paginate(5);

        if (Request::ajax()) {
            return Response::json(View::make('posts', array('posts' => $posts))->render());
        }

        return View::make('blog', array('posts' => $posts));
    }
}

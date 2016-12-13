<?php

namespace App\Admin\Controllers;

use App\Article;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ArticleController extends Controller
{
    use ModelForm;

    public function index(){
        print_r(Article::all());
    }
}

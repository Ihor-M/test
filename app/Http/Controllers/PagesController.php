<?php

namespace App\Http\Controllers;

use App\Entity\Post;
use App\Entity\User;
use App\Repositories\PagesRepositorie;
use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    private $pagesRopo;

    public function __construct(PagesRepositorie $pagesRopo)
    {
        $this->pagesRopo = $pagesRopo;
    }

    public function index()
    {
        $posts = $this->pagesRopo->showPosts();
        $carsCategories = $this->pagesRopo->showCategoryCars(['author']);
//        $string = $this->pagesRopo->([ 'messageBody']);
//        $substr = substr($string, 0, 5);
        $technologyCategories = $this->pagesRopo->showCategoryTechnology();
        $sportsCategories = $this->pagesRopo->showCategorySports();

        return view('blog.blog-main', compact('posts', 'carsCategories', 'technologyCategories', 'sportsCategories'));   //->paginate(5);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newArticle()
    {
        return view('blog.new-article');
    }

    public function myArticles()
    {
        $titles = $this->pagesRopo->showPosts();

        return view('blog.my-articles', compact('titles'));
    }

    public function sideMenu()
    {
        return view('blog.side-menu');
    }

}

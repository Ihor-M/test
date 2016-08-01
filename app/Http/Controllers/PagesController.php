<?php

namespace App\Http\Controllers;

use App\Repositories\PagesRepositorie;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    private $pagesRopo;

    public function __construct(PagesRepositorie $pagesRopo)
    {
        $this->middleware('cors');
        $this->pagesRopo = $pagesRopo;
    }

    public function index()
    {
        $posts                  = $this -> pagesRopo -> showPosts();
        $carsCategories         = $this -> pagesRopo -> showCategoryCars();
        $technologyCategories   = $this -> pagesRopo -> showCategoryTechnology();
        $sportsCategories       = $this -> pagesRopo -> showCategorySports();
        $latestNews             = $this -> pagesRopo -> getLatest();

        return view('blog.blog-main', compact('posts', 'paginate', 'carsCategories', 'technologyCategories', 'sportsCategories', 'latestNews'));
    }

    public function breakingNews(Request $request)
    {
        $breakingNews = $this->pagesRopo->getLatest();

        return view('blog.breaking-news', compact('breakingNews'));
    }

    public function carsAndVehicles()
    {
        $carsAndVehicles = $this->pagesRopo->showCategoryCars();
        return view('blog.cars-and-vehicles', compact('carsAndVehicles'));
    }

    public function searchByAuthor(Request $request)
    {
        $searchedAuthors = $this->pagesRopo->searchByAuthorName([
            'author' => $request->search
        ]);

        return view('blog.search-page', compact('searchedAuthors'));
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
        $titles = $this->pagesRopo->showMyArticles();

        return view('blog.my-articles', compact('titles'));
    }

    public function sideMenu()
    {
        return view('blog.side-menu');
    }

    public function apiPosts(Request $request)
    {
        //$this -> middleware('cors');
        $posts = $this-> pagesRopo -> showPosts();

        return $posts -> toJson();
    }

    public function apiBreakingNews(Request $request)
    {
        //$this -> middleware('cors');
        $latestNews = $this -> pagesRopo -> getLatest();

        return $latestNews -> toJson();
    }

    public function apiCarsAndVehicles()
    {
        //$this -> middleware('cors');
        $carsCategories = $this -> pagesRopo -> showCategoryCars();

        return $carsCategories -> toJson();

    }

    public function apiTechnologyCategories()
    {
        //$this -> middleware('cors');
        $technologyCategories = $this -> pagesRopo -> showCategoryTechnology();

        return $technologyCategories -> toJson();
    }

    public function apiSportsCategories()
    {
        //$this -> middleware('cors');
        $sportsCategories = $this -> pagesRopo -> showCategorySports();

        return $sportsCategories -> toJson();
    }
    public function apiMyArticles()
    {
        $titles = $this -> pagesRopo -> showMyArticles();

        return $titles -> toJson();
    }
}

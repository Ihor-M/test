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
        $this->pagesRopo = $pagesRopo;
    }

    public function index()
    {
        $posts = $this->pagesRopo->showPosts();
        $carsCategories = $this->pagesRopo->showCategoryCars();
        $technologyCategories = $this->pagesRopo->showCategoryTechnology();
        $sportsCategories = $this->pagesRopo->showCategorySports();
        $latestNews = $this->pagesRopo->getLatest();

        return view('blog.blog-main', compact('posts', 'paginate', 'carsCategories', 'technologyCategories', 'sportsCategories', 'latestNews'));
    }

    public function breakingNews()
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

}

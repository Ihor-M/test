<?php
/**
 * Created by PhpStorm.
 * User: ihorm
 * Date: 20.07.16
 * Time: 19:45
 */

namespace App\Repositories;


use App\Entity\Post;
use Illuminate\Support\Facades\Cache;

class PagesRepositorie
{

    private $pages;

    public function __construct(Post $pages)
    {
        $this->pages = $pages;
    }

    public function showPosts()
    {
//        $x = $this->pages->all(['author']);
//        dd($x);

        return Cache::remember('showPosts'. request('page'), 20, function () {
            return $this->pages->orderBy('created_at', 'dsc')->paginate(4);
        });

    }

    public function showCategoryCars()
    {
        return Cache::remember('showCategoryCars'. request('page'), 20, function () {
            return $this->pages->orderBy('created_at', 'dsc')->where('category', 'Cars & Vehicles')->paginate(3);
        });

    }

    public function showCategoryTechnology()
    {
        return Cache::remember('showCategoryTechnology'. request('page'), 20, function () {
            return $this->pages->orderBy('created_at', 'dsc')->where('category', 'Technology')->paginate(3);
        });

    }

    public function showCategorySports()
    {
        return Cache::remember('showCategorySports'. request('page'), 20, function () {
            return $this->pages->orderBy('created_at', 'dsc')->where('category', 'Sport')->paginate(3);
        });

    }

    public function showMyArticles()
    {
        return Cache::remember('showMyArticles'. request('page'), 20, function() {
            return $this->pages->orderBy('created_at', 'dsc')->where('author', 'Ihor Mulyk')->paginate(4);
        });

    }
    public function getLatest()
    {
        return Cache::remember('getLatest'. request('page'), 20, function () {
            return $this->pages->orderBy('created_at', 'dsc')->paginate(3);
        });

    }

    public function searchByAuthorName($attributes)
    {
        return Cache::remember('searchByAuthorName' . $attributes['author'], 20, function () use ($attributes) {
            return $this->pages->orderBy('created_at', 'dsc')->where($attributes)->get();
        } );

    }
}
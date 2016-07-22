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
        return Cache::remember('showPosts', 20, function () {
            return $this->pages->orderBy('created_at', 'dsc')->paginate(4);
        });

    }

    public function showCategoryCars()
    {
        return Cache::remember('showCategoryCars', 20, function () {
            return $this->pages->orderBy('created_at', 'dsc')->where('category', 'Cars & Vehicles')->limit(3)->paginate(3);
        });

    }

    public function showCategoryTechnology()
    {
        return Cache::remember('showCategoryTechnology', 20, function () {
            return $this->pages->orderBy('created_at', 'dsc')->where('category', 'Technology')->limit(3)->paginate(3);
        });

    }

    public function showCategorySports()
    {
        return Cache::remember('showCategorySports', 20, function () {
            return $this->pages->orderBy('created_at', 'dsc')->where('category', 'Sport')->limit(3)->paginate(3);
        });

    }

    public function showMyArticles()
    {
        return Cache::remember('showMyArticles', 20, function() {
            return $this->pages->orderBy('created_at', 'dsc')->where('author', 'Ihor Mulyk')->paginate(4);
        });

    }
    public function getLatest()
    {
        return Cache::remember('getLatest', 20, function () {
            return $this->pages->orderBy('created_at', 'dsc')->limit(3)->paginate(3);
        });

    }

    public function searchByAuthorName($attributes)
    {
        return Cache::remember('searchByAuthorName' . $attributes['author'], 20, function () use ($attributes) {
            return $this->pages->orderBy('created_at', 'dsc')->where($attributes)->get();
        } );

    }
}
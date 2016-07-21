<?php
/**
 * Created by PhpStorm.
 * User: ihorm
 * Date: 20.07.16
 * Time: 19:45
 */

namespace App\Repositories;


use App\Entity\Post;

class PagesRepositorie
{

    private $pages;

    public function __construct(Post $pages)
    {
        $this->pages = $pages;
    }
    public function showPosts()
    {
        $x = $this->pages->all();
        return $x;
    }

    public function showCategoryCars($attributes)
    {
        $y = $this->pages->all()->where('category', 'Cars & Vehicles')->get($attributes);
        return $y;
    }
    public function showCategoryTechnology()
    {
        $i = $this->pages->all()->where('category', 'Technology');
        return $i;
    }
    public function showCategorySports()
    {
        $z = $this->pages->all()->where('category', 'Sports');
        return $z;
    }

}
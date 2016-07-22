<?php
/**
 * Created by PhpStorm.
 * User: ihorm
 * Date: 18.07.16
 * Time: 19:57
 */

namespace App\Repositories;


use App\Entity\Post;
use Illuminate\Support\Facades\Cache;

class PostRepository
{

    private $model;

    public function __construct(Post $model)
    {
        $this->model = $model;
    }


    public function newPost($attributes)
    {
        Cache::flush();
        return $this->model->create($attributes);
    }

    public function getId($id)
    {
        Cache::flush();
        return $this->model->find($id);
    }

    public function editPost($id, $attributes)
    {
        Cache::flush();
        return $this->model->find($id)->update($attributes);
    }

    public function deletePost($id)
    {
        Cache::flush();
        return $this->model->destroy($id);
    }
}
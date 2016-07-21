<?php
/**
 * Created by PhpStorm.
 * User: ihorm
 * Date: 18.07.16
 * Time: 19:57
 */

namespace App\Repositories;


use App\Entity\Post;

class PostRepository
{

    private $model;

    public function __construct(Post $model)
    {
        $this->model = $model;
    }


    public function newPost($attributes)
    {
        return $this->model->create($attributes);
    }

    public function getId($id)
    {
        return $this->model->find($id);
    }
}
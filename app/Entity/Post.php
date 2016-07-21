<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * @var string
     */
    protected $table = 'posts';

    /**
     * @var array
     */
    protected $fillable = [
        'author',
        'title',
        'messageBody',
        'category',
        'image_path',
    ];
}

<?php

namespace App\Http\Controllers;

use App\Entity\Post;
use App\Repositories\PostRepository;
use App\Services\ImageUpload;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class PostController extends Controller
{

    private $postRepo;

    public function __construct(PostRepository $postRepo)
    {
        $this->postRepo = $postRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ImageUpload $imageUpload)
    {
//        validate data
        $this->validate($request, [
            'author'        => 'required|max:50',
            'articleName'   => 'required|max:255',
            'articleBody'   => 'required',
            'image'         => 'required|image'
        ]);


        //store in database
        $posts = $this->postRepo->newPost([
            'category'       => $request->category,
            'author'         => $request->author,
            'title'          => $request->articleName,
            'messageBody'    => $request->articleBody,
            'image_path'     => $imageUpload->imageUpload($request->file('image'))
        ]);





        Session::flash('success', 'The blog post was successfully save!');

        //redirect to another page
        return redirect()->route('posts.show', $posts->id);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = $this->postRepo->getId($id);

        return view('blog.show')->with('posts', $posts);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = $this->postRepo->getId($id);
        return view('blog.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, ImageUpload $imageUpload)
    {
        $this->validate($request, [
            'author'        => 'required|max:50',
            'articleName'   => 'required|max:255',
            'articleBody'   => 'required',
            'image'         => 'required|image'
        ]);

        $this->postRepo->editPost($id, [
            'category' => $request->category,
            'author' => $request->author,
            'title' => $request->articleName,
            'messageBody' => $request->articleBody,
            'image_path' => $imageUpload->imageUpload($request->file('image'))
        ]);


        return redirect()->route('posts.update', $id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($postId)
    {
        $this->postRepo->deletePost($postId);
        return redirect()->route('myBlog');
    }
}

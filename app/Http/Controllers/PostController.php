<?php

namespace App\Http\Controllers;

use App\Entity\Post;
use App\Repositories\PostRepository;
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
    public function store(Request $request)
    {
//        validate data
        $this->validate($request, [
            'author' => 'required|max:50',
            'articleName' => 'required|max:255',
            'articleBody' => 'required',
            'image' => 'required|mimes:png'
        ]);

        //store in database
        $posts = $this->postRepo->newPost([
            'category' => $request->category,
            'author' => $request->author,
            'title' => $request->articleName,
            'messageBody' => $request->articleBody]);

        //upload image

        $imageName = $posts->id . '.' .$request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(base_path() . '/public/images/', $imageName);

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

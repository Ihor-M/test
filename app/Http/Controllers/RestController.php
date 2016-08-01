<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;
use App\Services\ImageUpload;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class RestController extends Controller
{
    private $apiPostRepo;

    public function __construct(PostRepository $apiPostRepo)
    {
        $this->apiPostRepo = $apiPostRepo;
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
        $this->validate($request, [
            'author' => 'required | max(50)',
            'articleName' => 'required | max(255)',
            'articleBody' => 'required',
            'image' => 'image'
        ]);

        $apiPosts = $this->apiPostRepo->newPost([
            'category' => $request->category,
            'author' => $request->author,
            'title' => $request->articleName,
            'messageBody' => $request->articleBody,
            'image_path' => $imageUpload->imageUpload($request->file('image'))
        ]);

        Session::flash('success', 'The blog post was successfully save!');

        return $apiPosts->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

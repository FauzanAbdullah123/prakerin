<?php

namespace App\Http\Controllers;

use App\Tag;
use Session;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $tag = Tag::all();
        $response = [
            'success' => true,
            'data' =>  $tag,
            'message' => 'Berhasil ditampilkan.'
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama_tag' => 'required|unique:tags',
        // ]);
        $tag = new Tag();
        $tag->nama_tag = $request->nama_tag;
        $tag->slug = str_slug($request->nama_tag, '-');
        $tag->save();
        $response = [
            'success' => true,
            'data' =>  $tag,
            'message' => 'Berhasil ditambahkan.'
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // //$request->validate([
        //     'nama_tag' => 'required',
        // ]);
        $tag = Tag::findOrFail($request->id);
        $tag->nama_tag = $request->nama_tag;
        $tag->slug = str_slug($request->nama_tag, '-');
        $tag->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Mengedit <b>$tag->nama_tag</b>"
        ]);
        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::find($id)->delete($id);

        $response = [
            'success' => true,
            'data' =>  $tag,
            'message' => 'Berhasil dihapus.'
        ];
        return response()->json($response, 200);
    }
}

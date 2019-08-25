<?php

namespace App\Http\Controllers;

use App\Event;
use File;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $event = Event::all();
        $response = [
            'success' => true,
            'data' =>  $event,
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
        //     'judul' => 'required|unique:artikels',
        //     'konten' => 'required|min:30',
        //     'foto' => 'required|mimes:jpeg,jpg,png,gif|required|max:2048',
        //     'kategori_id' => 'required',
        //     'tag_id' => 'required'
        // ]);
       $event = new Event();
       if ($request->hasFile('foto')){
           $file = $request->file('foto');
           $path = public_path().
                           '/assets/img/event/';
           $filename = str_random(6).'_'
                       .$file->getClientOriginalName();
           $uploadSuccess = $file->move(
               $path,
               $filename
           );
           $event->foto = $filename;
       }
       $event->judul = $request->judul;
       $event->tempat = $request->tempat;
       $event->tanggal = $request->tanggal;
       $event->save();
       $response = [
        'success' => true,
        'data' =>  $event,
        'message' => 'Berhasil ditambahkan.'
    ];
    return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        if ($event->foto){
            $old_foto = $event->foto;
            $filepath = public_path()
            . '/assets/img/event/'
            . $event->foto;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
                // File sudah dihapus/tidak ada
            }
        }
        $event->delete();
        $response = [
            'success' => true,
            'data' =>  $event,
            'message' => 'Berhasil dihapus.'
        ];
        return response()->json($response, 200);
    }
}

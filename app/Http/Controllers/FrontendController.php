<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori;
use App\Tag;
use App\Event;

class FrontendController extends Controller
{
    public function index()
    {
        $artikel = Artikel::with('kategori', 'tag', 'user')->take(4)->get();

        return view('frontend.index', compact('artikel'));
    }

    public function event(){
        $event = Event::all();
        return view('frontend.events', compact('event'));
    }

    public function allblog(Request $request)
    {
        $artikel = Artikel::with('kategori', 'tag', 'user')->get();

        $cari = $request->cari;

        if ($cari) {
            $artikel = Artikel::where('judul', 'LIKE', "%$cari%")->paginate(4);
        }
        return view('frontend.blog.home', compact('artikel'));
    }

    public function detailblog(Artikel $artikel)
    {
        return view('frontend.blog.detail', compact('artikel'));
    }

    public function blogcat(Kategori $cat)
    {
        $artikel = $cat->artikel()->latest()->paginate(5);
        return view('frontend.blog.home', compact('artikel', 'cat'));
    }

    public function blogtag(Tag $tag)
    {
        $artikel = $tag->artikel()->latest()->paginate(5);
        return view('frontend.blog.home', compact('artikel', 'cat'));
    }
}

@extends('layouts.frontend')

@section('title') {{ $artikel->judul }} @endsection

@section('content')


    <!-- Start blog-posts Area -->
        <div class="single-post">
            <img class="img-fluid" src="{{ asset('assets/img/artikel/'.$artikel->foto)}}" alt="error" style="height:100%; width:100%">
                <div class="tags">
                    <div class="col-lg-4">
                        <div class="row">
                            @foreach($artikel->tag as $t)
                                <a style="color:blue;" href="/blog/tag/{{$t->slug}}">#{{ $t->nama_tag }}, </a>
                            @endforeach
                        </div>
                    </div>
                </div>
        <div class="col-lg-4">
            <div class="row">
                <a href="{{ route('detail.blog', $artikel->slug) }}">
                    <h1>
                        {{ $artikel->judul }}
                    </h1>
                </a>
            </div>
        </div>
            <p>
                {!! $artikel->konten !!}
            </p>
        <br><br><br><br>
        <div class="bottom-meta">
            <div class="user-details row align-items-center">
                <div class="comment-wrap col-lg-6">
                    <script data-sil-id="5d2d6c5baea7930010e1c912">let loadWidget = function() { var d = document, w = window, l = window.location,p = l.protocol == "file:" ? "http://" : "//"; if (!w.WS) w.WS = {}; c = w.WS; var m=function(t, o){ var e = d.getElementsByTagName("script"); e=e[e.length-1]; var n = d.createElement(t); if (t=="script") {n.async=true;} for (k in o) n[k] = o[k]; e.parentNode.insertBefore(n, e)}; m("script", { src: p + "bawkbox.com/widget/like-dislike/5d2d6c5baea7930010e1c912?page=" +encodeURIComponent(l+''), type: 'text/javascript' }); c.load_net = m; }; if(window.Squarespace){ document.addEventListener('DOMContentLoaded', loadWidget); } else { loadWidget() } </script><div class="sil-widget-like-dislike sil-widget" id="sil-widget-5d2d6c5baea7930010e1c912"><a href="//bawkbox.com/install/like-dislike">Like Dislike Button</a></div><!-- End BawkBox Code-->
                </div>
                <div class="social-wrap col-lg-6">
                    <ul>
                        <li><a href="https://www.facebook.com/fauzan.abdullah.353"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/uzhanserenade22"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/FauzanFingerstyle"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

{{-- @include('frontend.blog.side') --}}

    </div>
	</div>
</section>
			<!-- End blog-posts Area -->

@endsection

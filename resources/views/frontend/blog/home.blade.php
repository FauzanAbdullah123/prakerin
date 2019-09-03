@extends('layouts.frontend')

@section('title') News(Artikel) @endsection


@section('content')

<!-- start banner Area -->
    @foreach($artikel as $data)
        <div class="single-post">
            <img class="img-fluid" src="{{ asset('assets/img/artikel/'.$data->foto)}}" alt="error" style="height:250px; width:500px; border-radius:2px;"><br><br>
        <div class="col-md-8">
            <div class="row">
                <a href="{{ route('detail.blog', $data->slug) }}">
                    <h1>
                        {{ $data->judul }}
                    </h1>
                </a>
            </div>
        </div>
            <p>
               {!! substr($data->konten, 0, 300) !!}
            </p>
         <div class="col-md-8">
            <div class="row">
                <a href="{{ route('detail.blog', $data->slug) }}" class="btn oneMusic-btn">lihat selengkapnya <i class="fa fa-angle-double-right"></i></a>
            </div>
         </div>
        <br><br><br><br><br><br>
    @endforeach
</div>
        @include('frontend.blog.side')
    </div>
	</div>
</section>
			<!-- End blog-posts Area -->

@endsection

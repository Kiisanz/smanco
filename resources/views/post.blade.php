@extends('layouts.post')

@section('container')
     <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                   
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{{ $post['title'] }}</h1>
                            <!-- Post meta content-->
                            <div id="post-meta" class="fs-6 fst-italic mb-2">Di posting oleh {{ $post->author }} pada {{ $post['updated_at']->diffForHumans() }}</div>
                        </header>
                        <!-- Preview image figure-->
                         @if($post->image)
                        <figure class="img__post mb-4">
                          <img class="img-fluid rounded max-height" src="{{asset('storage/' . $post->image) }}" alt="{{ $post->title }}" />
                          </figure>
                          @else
                          <figure class="img_post mb-4">
                            <img class="img-fluid rounded max-height" src="{{asset('assets/img/post_detail.jpg')}}">
                          </figure>
                          @endif
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="font-monospace fs-6 mb-4">{!! $post->body !!}</p>
                        </section>
                    </article>
                </div>
            </div>
        </div>
@endsection
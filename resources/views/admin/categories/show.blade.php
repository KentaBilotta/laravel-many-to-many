@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-capitalize">{{ $category->name }}</h1>
    <p class="fs-5">
        {{ $category->description }}
    </p>

    <div class="row g-3">
        @foreach ($posts as $post)
            {{-- <li><span>{{ $post->id }} </span><a href="{{ route('admin.posts.show', ['post' => $post]) }}">{{ $post->title }}</a></li> --}}
            <div class="col-sm-6 col-md-4">
                <div class="card h-100">
                    <img src="{{ asset($post->uploaded_img ? 'storage/' . $post->uploaded_img : 'storage/placeholder.jpeg') }}" class="card-img-top" alt="{{ $post->title }}">
                    <div class="card-body d-flex flex-column ">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p class="card-text flex-grow-1">{{ $post->excerpt }}</p>
                      <a href="{{ route('admin.posts.show', ['post' => $post]) }}" class="btn btn-primary">Read</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-3">
        {{ $posts->links() }}
    </div>
</div>
@endsection

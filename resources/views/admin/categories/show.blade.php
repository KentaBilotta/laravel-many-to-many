@extends('layouts.app')

@section('content')
<div class="container border border-2 border-dark">
    <h1 class="text-capitalize">{{ $category->name }}</h1>
    <p class="fs-5">
        {{ $category->description }}
    </p>

    <ul>
        @foreach ($category->posts as $post)
            <li><a href="{{ route('admin.posts.show', ['post' => $post]) }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
</div>
@endsection

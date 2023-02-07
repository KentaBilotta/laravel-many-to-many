@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-capitalize">{{ $post->title }}</h1>
    @if (isset($post->category->name))
        <h2>Category: <a href="{{ route('admin.categories.show', ['category' => $post->category]) }}">{{ $post->category->name }}</a></h2>
    @endif
    @if ($post->tags)
        <h3>
            Tags:
            @foreach ($post->tags as $tag)
                {{ $tag->name }}{{ $loop->last ? '' : ', ' }}
            @endforeach
        </h3>
    @endif
    {{-- <img src="{{ $post->image }}" alt="{{ $post->title }}" class="my-3"> --}}
    <img src="{{ asset('storage/' . $post->uploaded_img) }}" alt="{{ $post->title }}" class="my-3">
    <p class="fs-5">
        {{ $post->content }}
    </p>
</div>
@endsection

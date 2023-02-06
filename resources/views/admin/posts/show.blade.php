@extends('layouts.app')

@section('content')
<div class="container text-center border border-2 border-dark">
    <h1 class="text-capitalize">{{ $post->title }}</h1>
    <h2>Category: {{ $post->category->name }}</h2>
    {{-- <img src="{{ $post->image }}" alt="{{ $post->title }}" class="my-3"> --}}
    <img src="{{ asset('storage/' . $post->uploaded_img) }}" alt="{{ $post->title }}" class="my-3">
    <p class="fs-5">
        {{ $post->content }}
    </p>
</div>
@endsection

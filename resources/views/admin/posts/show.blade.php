@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1 class="text-capitalize">{{ $post->title }}</h1>
    @if (isset($post->category->name))
        <h2>Category: {{ $post->category->name }}</h2>
    @endif
    {{-- <img src="{{ $post->image }}" alt="{{ $post->title }}" class="my-3"> --}}
    <img src="{{ asset('storage/' . $post->uploaded_img) }}" alt="{{ $post->title }}" class="my-3">
    <p class="fs-5">
        {{ $post->content }}
    </p>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container text-center border border-2 border-dark">
    <h1 class="text-capitalize">{{ $post->title }}</h1>
    <img src="{{ $post->image }}" alt="{{ $post->title }}" class="my-3">
    <p class="fs-5">
        {{ $post->content }}
    </p>
</div>
@endsection

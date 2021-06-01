@extends('layouts.app')
    @section('content')
        <h3 style="text-align: center">{{ $post->title }}</h3>
        <p style="text-align: center; word-wrap: break-word;">{{ $post->text }}</p>
    @endsection

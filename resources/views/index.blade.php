@extends('layouts.app')

    <h1 style="text-align: center;">@yield('title', 'Все статьи')</h1>
    <div style="text-align: center">
        <a href="{{ route('create') }}" class="btn btn-primary">Создать Статью</a>
    </div>


    @section('content')
        @foreach($posts as $post)
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 style="text-align: center;">{{ $post->title }}</h2><br>
                        <p>{{ $post->description }}</p><br>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a class="btn btn-primary" href="{{ route('read', ['postId' => $post->id]) }}" role="button">Подробнее</a>
                                <a class="btn btn-primary" href="{{ route('updatePage', ['postId' => $post->id]) }}" role="button">Изменить</a>
                                <a class="btn btn-danger" href="{{ route('delete', ['postId' => $post->id]) }}" role="button">Удалить</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach


    @endsection

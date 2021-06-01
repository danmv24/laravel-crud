@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6 mx-auto">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h3>Редактировать пост</h3>

            <form method="POST" action="{{ route('updatePost', $post) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <input type="text" name="title"
                           value="{{ $post->title }}" class="form-control" id="post-title">
                </div>

                <div class="form-group">
                    <textarea name="description" class="form-control" id="description" rows="3">{{ $post->description }}</textarea>
                </div>

                <div class="form-group">
                    <textarea name="text" class="form-control" id="text" rows="3">{{ $post->text }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>
@endsection

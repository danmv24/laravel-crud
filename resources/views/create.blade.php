@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <h3>Создать публикацию</h3>
            <form method="post" action="{{ route('create') }}">
                @csrf
                <div class="mb-3">
                    <input type="text" name="title" class="form-control{{ $errors->has('title') ? " is-invalid" : ""}}"
                           id="title"
                           value="{{ Request::old('title') ?: '' }}" placeholder="Название публикации">
                    @if ($errors->has('title'))
                        <span class="help-block text-danger">
                            {{ $errors->first('title') }}
                        </span>
                    @endif
                </div>

                <div class="mb-3">
                    <div class="form-group">
                    <textarea name="description" rows="3"
                              class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                              placeholder="Описание публикации"></textarea>
                        @if ($errors->has('description'))
                            <div class="invalid-feedback">
                                {{ $errors->first('description') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                    <textarea name="text" rows="3"
                              class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"
                              placeholder="Текст публикации"></textarea>
                        @if ($errors->has('text'))
                            <div class="invalid-feedback">
                                {{ $errors->first('text') }}
                            </div>
                        @endif
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Создать</button>
            </form>
        </div>
    </div>
@endsection

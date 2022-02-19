@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-lg shdow-sm p-4 text-center fex flex-col gap-5">
        <form action="{{ route('posts.update', $post) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mt-3 flex flex-col gap-2">
                <label for="title">{{ trans('posts.fields.title') }}</label>
                <input type="text" name="title" id ="title" value="{{ $post->title }}" required>
            </div>
            <div class="mt-3 flex flex-col gap-2">
                <label for="content">{{ trans('posts.fields.content') }}</label>
                <textarea name="content" id ="content" required>{{ $post->content }}</textarea>
            </div>
            <button class="btn btn-primary">{{ trans('posts.titles.edit') }}</button>
        </form>
    </div>
@endsection
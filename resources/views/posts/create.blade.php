@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-lg shdow-sm p-4 text-center fex flex-col gap-5">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div class="mt-3 flex flex-col gap-2">
                <label for="title">{{ trans('posts.fields.title') }}</label>
                <input type="text" name="title" id ="title" required>
            </div>
            <div class="mt-3 flex flex-col gap-2">
                <label for="content">{{ trans('posts.fields.content') }}</label>
                <textarea name="content" id ="content" required></textarea>
            </div>
            <button class="btn btn-primary">{{ trans('posts.titles.create') }}</button>
        </form>
    </div>
@endsection
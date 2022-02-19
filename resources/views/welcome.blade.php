@extends('layouts.app')
@section('content')
    <div class="bg-white rounded-lg shadow-sm p-4 text-center flex flex-col gap-5">
        <h1 class="text-3xl">{{ trans('pagination.welcome') }}</h1>
        <div class="flex justify-center gap-5">
            <a href="{{ route('posts.create') }}" class="btn-primary">{{ trans('posts.titles.create') }}</a>
            <a href="{{ route('posts.index') }}" class="btn-secondary">{{ trans('posts.titles.index') }}</button>
        </div>
    </div>
@endsection
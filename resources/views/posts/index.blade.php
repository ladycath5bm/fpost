@extends('layouts.app')
@section('content')
    <div class="bg-white rounded-lg dhadow-sm p-4 text-center felx flex-col gap-5">
        <table>
            <thead>
                <tr>
                    <th scope="col">{{ trans('posts.fields.title') }}</th>
                    <th scope="col">{{ trans('posts.fields.content') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($posts as $post)
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
@endsection
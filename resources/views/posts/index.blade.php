@extends('dashboard')
@section('content')
    <post>
        <!--puedo itilizar model binding, si uso .vue no puedo usar var php-->
        
    </post>
    <div class="bg-white rounded-lg dhadow-sm p-4 text-center flex flex-col gap-5">
        <table>
            <thead>
                <tr>
                    <th scope="col">{{ trans('posts.fields.title') }}</th>
                    <th scope="col">{{ trans('posts.fields.content') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
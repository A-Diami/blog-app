@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-blue-200">
            <h1 class="text-6xl">
                Modifier un post
            </h1>
        </div>
    </div>

    @if ($errors->any())
        <div class="w-4/5 m-auto">
            <ul>
                @foreach ($errors as $error )
                    <li class="w-1/5 mb-4 text-blue-50 bg-red-700 rounded-3xl py-4">
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="w-4/5 m-auto pt-20">
        <form action="/blog/{{ $post->slug }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <input type="text" name="title" value="{{ $post->title }}" placeholder="Titre..." class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

            <textarea name="description" placeholder="Description..." class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">{{ $post->title }}</textarea>

            <button type="submit" class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">Ajouter</button>
        </form>
    </div>

@endsection
@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-blue-200">
            <h1 class="text-6xl">
                Blog Posts
            </h1>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-1/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                {{session()->get('message')}}
            </p>
        </div>
    @endif

    @if (Auth::check())
        @can('create', 'App\Models\Post')
        <div class="pt-15 w-4/5 m-auto">
            
                <a href="/blog/create" class="bg-blue-500 uppercase bg-transparent text-gray-100 text-s font-extrabold py-3 px-5 rounded-3xl">
                    Creer un post
                </a>
           
           
        </div>
        @endcan
    @endif
    @foreach ($posts as $post )
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-blue-200">
            <div class="class">
                <h2 class="text-blue-700 font-bold text-5xl pb-4">
                    {{$post->title}}
                </h2>

                <span class="text-blue-500">
                    Par <span class="font-bold italic text-blue-800">{{$post->user->name}}</span>, crée {{ date('jS M Y',strtotime($post->updated_at) )}}
                </span>

                <p class="text-xl text-blue-700 pt-8 pb-10 leading-8 font-light">
                    {{$post->description}}
                </p>

                <a href="/blog/{{$post->slug}}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">Continue de lire</a>
                @if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                    <span class="float-right">
                        <a href="/blog/{{$post->slug}}/edit" class="text-blue-700 italic hover:text-blue-900 pb-1 border-b-2">Edit</a>
                    </span>

                    <span class="float-right">
                        <form action="/blog/{{$post->slug}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-red-700 pr-3">Supprimer</button>
                        </form>
                       
                    </span>
                @endif
            </div>

               
            <div class="class">
                <img src="{{asset('photo/'.$post->image)}}" alt="img2" width="700" class="src">
            </div>
        </div>
    @endforeach
@endsection
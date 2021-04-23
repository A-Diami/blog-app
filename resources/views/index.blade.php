@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-blue-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Voulez-vous devenir un developpeur?
                </h1>

                <a href="/blog" class="text-center text-white py-2 px-4 font-bold text-xl uppercase border-b rounded-3xl" style="background-color:#e74c3c">
                    Lire la suite
                </a>
            </div>
        </div>
    </div>
    
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-blue-200">
        <div>
           <img src="{{asset('images/chair-2605331_1920.jpg')}}" alt="img1" width="500" class="src">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-blue-600">
                Vous avez du mal a devenir un meilleur developpeur?
            </h2>

            <p class="py-8 text-blue-500 text-s">
                Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page. 
            </p>

            <p class="font-extrabold text-blue-600 text-s pb-9">
                Le lorem ipsum est, en imprimerie, une suite de mots sans signification
                utilisée à titre provisoire pour calibrer une mise en page, 
                le texte définitif. 
            </p>

            <a href="/blog" class="uppercase bg-gray-500 text-blue-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                En savoir plus
            </a>
        </div>
    </div>

    <div class="text-center p-15 text-white" style="background-color:#143959">
        <h2 class="text-2xl pb-5 text-l">
            Je suis une experte en 
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Developpement web
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Arduino
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Marketing Digital
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-blue-400 font-extrabold">
            Blog
        </span>

        <h2 class="text-4xl font-extrabold py-10">
            Mes recents posts
        </h2> 
        <p class="m-auto w-4/5 text-blue-500">
            Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée
            à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-blue-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase  text-3xs font-extrabold">
                    PHP
                </span> 

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam fugit ex ipsum quidem, iusto quasi, itaque quae molestiae vel accusamus perferendis 
                    doloremque eaque error repellat quas soluta omnis debitis beatae.
                </h3>

                <a href="" 
                class="uppercase bg-transparent border-2 border-blue-100 
                text-gray-100 text-xs font-extrabold
                 py-3 px-5 rounded-3xl">En savoir plus</a>
            </div> 
        </div>
        
        <div>
            <img src="{{asset('images/hand-4397991_1920.jpg')}}" alt="img2" width="600" class="src">
        </div>
    
    </div>


   
@endsection


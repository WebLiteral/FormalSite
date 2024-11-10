@extends('layouts.base')

@section('title', 'Gallery')

@section('content')


<div class='flex flex-col items-center text-center font-cambria '>

    <h1 class="font-oldenglish text-7xl w-max  pb-3 pt-1 px-4 m-10 lh-doubleborders">Gallery</h1>

    <div class="w-3/5 space-y-2">
        <p>Welcome to the Gallery Page.</p>
    </div>
</div>

<!-- Todo landing page with:
- view all
- collections
- whatever i dont care
- archive


-->



<div class="h-24"></div>

<div class="font-cambria py-3 px-20 lh-doubleborders flex justify-center">
    <ul class="flex flex-col w-full">
        @foreach ($allArtworks as $article)
            <a href="articles/{{$article->slug}}">
                <li class="flex border-b-2 p-2">
                    <div class="px-2">
                        <link rel="stylesheet"
                            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,200,0,0&icon_names=description" />
                        <span class="material-symbols-outlined" style="font-size: 52px;">
                            
                        </span>
                    </div>

                    <div>
                        <h2 class="text-2xl">{{$article->title}}</h2>
                        <p class="text-sm italic">{{$article->description}}</p>
                    </div>
                </li>
            </a>
        @endforeach
    </ul>
</div>


@endsection
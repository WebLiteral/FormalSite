@extends('layouts.base')

@section('title', 'Articles')

@section('content')


<div class='flex flex-col items-center font-cambria '>

    <div class="w-full pb-3 pt-1 px-4 m-10 border-b-2 text-center">
    <h1 class="text-7xl">
    {{$article->title}}
    </h1>
    <p class="pt-6 italic">{{$article->description}}</p>
    </div>

   

    <div class="w-3/5 space-y-9 text-lg articlestyling">
        {!! $article->content !!}
    </div>
</div>

<div class="h-24"></div>

<div class="font-cambria py-3 px-20 lh-doubleborders flex justify-center">

</div>


@endsection
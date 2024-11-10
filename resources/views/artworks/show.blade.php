@extends('layouts.base')

@section('title', 'Gallery')

@section('content')


<div class='flex flex-col items-center font-cambria '>

    <h1 class="font-oldenglish text-7xl w-max  pb-3 pt-1 px-4 m-10 lh-doubleborders">Gallery</h1>

    <div class="w-3/5 space-y-2">
        <p>Viewing Artwork {{$artwork->title}}</p>
        <ul>

            <div>
                <img src="{{$artwork->file_url}}" style="height: 1000px"></img>
                <h2 class="text-2xl">{{$artwork->id}} | {{$artwork->title}}</h2>
                <p class="text-sm italic">{{$artwork->description}}</p>
            </div>



        </ul>
    </div>
</div>





@endsection
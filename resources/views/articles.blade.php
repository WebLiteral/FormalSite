@extends('layouts.base')

@section('title', 'Articles')

@section('content')


<div class='flex flex-col items-center text-center font-cambria '>

    <h1 class="font-oldenglish text-7xl border-t-2 w-max border-b-2 pb-3 pt-1 px-4 m-10">Articles</h1>

    <div class="w-3/5 space-y-2">
        <p>Stuff you may or may not want to know.</p>
    </div>
</div>

<div class="h-24"></div> 

<div class="font-cambria py-3 px-20 lh-doubleborders">
    <ul class="flex flex-col">
        <li class="flex">
            <div class="px-2">
                <link rel="stylesheet"
                    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,200,0,0&icon_names=description" />
                <span class="material-symbols-outlined" style="font-size: 52px;">
                    description
                </span>
            </div>
            <div>
                <h2 class="text-2xl">Article Name</h2>
                <p class="text-sm italic">Brief description of article topic.</p>
            </div>
        </li>
    </ul>
</div>


@endsection
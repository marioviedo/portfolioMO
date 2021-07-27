@extends('layouts.template')

@section('title', 'Welcome')

@section('content')
    <!-- welcome -->
        
    <!-- end welcome -->

    <!-- Technologies -->
    <div class="text-center py-3"><span class="text-3xl antialiased">Technologies</span></div>
    <div class="container flex flex-row flex-wrap gap-6 text-center">
        @foreach ($technologies as $item)
            <div class="flex flex-col flex-grow">
                <div class="flex justify-center">{!!$item->image!!}</div>
                <div>{{$item->title}}</div>
            </div>
        @endforeach   
    </div>
    <!-- end Technologies -->

    @foreach ($posts as $item)
    <h1>{{$item->title}}</h1>
    {{$item->image}}
    @endforeach  
   
@endsection



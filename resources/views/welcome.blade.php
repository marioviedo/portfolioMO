@extends('layouts.template')

@section('title', 'Welcome')

@section('content')
    @foreach ($technology as $item)
        <h1>{{$item->title}}</h1>
    @endforeach
@endsection



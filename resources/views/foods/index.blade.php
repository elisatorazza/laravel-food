@extends('layouts.page')

@section('page-title')
    Home of Foods
@endsection

@section('page-content')
<div id="index-wrapper" class="container">
    <h1>Our selection of dishes</h1>
    <ul>
    @foreach ($foods as $food)
        <li>
            <h4>{{$food->name}}</h4>
            <a href="{{route('foods.show', $food->id)}}">
                <img src="{{$food->image}}" alt="missing image">
            </a>
            <a href="{{route('foods.edit', $food->id)}}">Edit</a>
            <form action="{{route('foods.destroy', $food->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <input type="submit" value="Delete">
                </form>
        </li>
    @endforeach
    </ul>
    <a href="{{route('foods.create')}}">Add new food</a>

    @if (session()->has('success'))
    <div class="alert alert-success">
        @if(is_array(session('success')))
            <ul>
                @foreach (session('success') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @else
            {{ session('success') }}
        @endif
    </div>
    @endif
</div>
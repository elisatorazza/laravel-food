@extends('layouts.page')

@section('page-title')
    {{$food->name}}
@endsection

@section('page-content')
<div id="show-wrapper">
    <ul>
        <li>{{$food->name}}</li>
        <li>Price: {{$food->price}} €</li>
        <li>Ingredients: {{$food->ingredients}}</li>
        <li>@if($food->vegan == 0)
            {{"No vegan"}}
            @else
            {{"Vegan"}}
            @endif
        </li>
        <li>@if($food["gluten-free"] == 0)
            {{"No gluten-free"}}
            @else
            {{"gluten-free"}}
            @endif
        </li>
        <li>{{$food->course}}</li>
    </ul>
    <a href="{{route('foods.edit', $food->id)}}">Edit</a>
    <form action="{{route('foods.destroy', $food->id)}}" method="POST">
    @csrf
    @method("DELETE")
    <input type="submit" value="Delete">
    </form>
    <a href="{{route('foods.index')}}">Back</a>
</div>
@endsection
@extends('layouts.page')

@section('page-title')
    {{$food->name}}
@endsection

@section('page-content')
<div id="show-wrapper" class="container">
    <h1>{{$food->name}}</h1>
    <ul>
        <li><strong>Price:</strong> {{$food->price}} €</li>
        <li><strong>Ingredients:</strong> {{$food->ingredients}}</li>
        <li>@if($food->vegan == 0)
            <strong>Vegan:</strong> No
            @else
            <strong>Vegan:</strong> Yes
            @endif
        </li>
        <li>@if($food["gluten-free"] == 0)
            <strong>Gluten-free:</strong> No
            @else
            <strong>Gluten-free:</strong> Yes
            @endif
        </li>
        <li><strong>Course:</strong> {{$food->course}}</li>
        <li><img src="{{$food->image}}" alt="{{$food->name}}"></li>
        <li>
            <a href="{{route('foods.edit', $food->id)}}">
                <i class="far fa-edit"></i>
            </a>
            <form action="{{route('foods.destroy', $food->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit">
                    <i class="far fa-trash-alt"></i>
                </button>
            </form>
        </li>
        <li id="back">
            <a href="{{route('foods.index')}}">Back</a>
        </li>
    </ul>
</div>
@endsection
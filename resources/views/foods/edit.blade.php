@extends('layouts.page')

@section('page-title')
    Edit dish
@endsection

@section('page-content')
<div id="edit-wrapper" class="container">
    <h1>{{$food->name}}</h1>
    <form action="{{route('foods.update', $food->id)}}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="name" placeholder="Name" value="{{$food->name}}">
        <input type="number" min="1" step="0.01" name="price" placeholder="Price" value="{{$food->price}}">
        <input type="text" name="ingredients" placeholder="Ingredients" value="{{$food->ingredients}}">
        <div>
            <label for="vegan">Vegan</label>
            <input type="hidden" name="vegan" value="0">
            <input type="checkbox" name="vegan" id="vegan" value="1"
            @if ($food->vegan)
                checked    
            @endif
            >
        </div>
        <div>
            <label for="gluten-free">Gluten-free</label>
            <input type="hidden" name="gluten-free" value="0">
            <input type="checkbox" name="gluten-free" id="gluten-free" value="1"
            @if ($food["gluten-free"])
                checked                
            @endif>
        </div>
        <input type="text" name="course" placeholder="Course" value="{{$food->course}}">
        <input type="text" name="image" placeholder="Image URL" value="{{$food->image}}">
        <input type="submit" value="Edit"> 
    </form>
        
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
@endsection
    
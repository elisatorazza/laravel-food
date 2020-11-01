@extends('layouts.page')

@section('page-title')
    Edit dish
@endsection

@section('page-content')
<div id="edit-wrapper" class="container">
    <form action="{{route('foods.update', $food->id)}}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="name" placeholder="name" value="{{$food->name}}">
        <input type="number" step="0.01" name="price" placeholder="price" value="{{$food->price}}">
        <input type="text" name="ingredients" placeholder="ingredients" value="{{$food->ingredients}}">
        <div>
            <label for="vegan">Vegan</label>
            <input type="hidden" name="vegan" value="0">
            <input type="checkbox" name="vegan" placeholder="vegan" id="vegan" value="1"
            @if ($food->vegan)
                checked    
            @endif
            >
        </div>
        <div>
            <label for="gluten-free">Gluten-free</label>
            <input type="hidden" name="gluten-free" value="0">
            <input type="checkbox" name="gluten-free" placeholder="gluten-free" id="gluten-free" value="1"
            @if ($food["gluten-free"])
                checked                
            @endif>
        </div>
        <input type="text" name="course" placeholder="course" value="{{$food->course}}">
        <input type="submit" value="Send"> 
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
    
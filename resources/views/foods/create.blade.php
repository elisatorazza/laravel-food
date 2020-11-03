@extends('layouts.page')

@section('page-title')
    Add new dish
@endsection

@section('page-content')
<div id="create-wrapper" class="container">
    <h1>Add new food</h1>
    <form action="{{route('foods.store')}}" method="POST">
    @csrf
    @method("POST")
        <input type="text" name="name" placeholder="Name">
        <input type="number" min="1" step="0.01" name="price" placeholder="Price">
        <input type="text" name="ingredients" placeholder="Ingredients">
        <div>
            <label for="vegan">Vegan</label>
            <input type="checkbox" value="1" name="vegan" placeholder="vegan" id="vegan">
        </div>
        <div>
            <label for="gluten-free">Gluten-free</label>
            <input type="checkbox" name="gluten-free" value="1" placeholder="gluten-free" id="gluten-free">
        </div>
        <input type="text" name="course" placeholder="Course">
        <input type="text" name="image" placeholder="Image URL">
        <input type="submit" value="Save">
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

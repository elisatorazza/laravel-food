@extends('layouts.page')

@section('page-title')
    Add new dish
@endsection

@section('page-content')
<div id="create-wrapper">
    <form action="{{route('foods.store')}}" method="POST">
    @csrf
    @method("POST")
        <input type="text" name="name" placeholder="name">
        <input type="number" step="0.01" name="price" placeholder="price">
        <input type="text" name="ingredients" placeholder="ingredients">
        <label for="vegan">Vegan</label>
        <input type="checkbox" value="1" name="vegan" placeholder="vegan" id="vegan">
        <label for="gluten-free">Gluten-free</label>
        <input type="checkbox" name="gluten-free" value="1" placeholder="gluten-free" id="gluten-free">
        <input type="text" name="course" placeholder="course">
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

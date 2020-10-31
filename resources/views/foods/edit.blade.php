<form action="{{route('foods.update', $food->id)}}" method="POST">
    
    @csrf
    @method("PUT")
        <input type="text" name="name" placeholder="name" value="{{$food->name}}">
        <input type="number" step="0.01" name="price" placeholder="price" value="{{$food->price}}">
        <input type="text" name="ingredients" placeholder="ingredients" value="{{$food->ingredients}}">
        <label for="vegan">Vegan</label>
        <input type="checkbox" name="vegan" placeholder="vegan" id="vegan" value="value1"{{ $food->vegan=='value1'?checked}}

        @if ($food->vegan==1)
            checked    
        @endif
        >
        <label for="gluten-free">Gluten-free</label>
        <input type="checkbox" name="gluten-free" placeholder="gluten-free" id="gluten-free" value="value1"{{ $food["gluten-free"]=='value1'?checked}}
        @if ($food["gluten-free"]==1)
        checked
        @endif
        >
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
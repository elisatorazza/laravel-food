<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food list</title>
</head>
<body>
    <ul>
    @foreach ($foods as $food)
        <li>
            <a href="{{route('foods.show', $food->id)}}">{{$food->name}}</a>
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
    
</body>
</html>
@extends ('layout.home-layout')

@section ('content')

  <h1>Create new car</h1>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

  <form action="{{route('cars.update', $car->id)}}" method="post">
    @csrf
    @method('PATCH')

    <label>Brand</label><br>
    <input type="text" name="brand" value="{{ $car->brand }}"><br>
    <label>Model</label><br>
    <input type="text" name="model" value="{{ $car->model }}"><br>
    <label>Displacement</label><br>
    <input type="text" name="displacement" value="{{ $car->displacement }}"><br>
    <label>Max speed</label><br>
    <input type="text" name="max_speed" value="{{ $car->max_speed }}"><br><br>
    <button type="submit" name="button">Save new Car!</button>
  </form>

@stop

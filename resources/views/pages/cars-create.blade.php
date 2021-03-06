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

  <form action="{{route('cars.store')}}" method="post">
    @csrf

    <label>Brand</label><br>
    <input type="text" name="brand" value=""><br>
    <label>Model</label><br>
    <input type="text" name="model" value=""><br>
    <label>Displacement</label><br>
    <input type="text" name="displacement" value=""><br>
    <label>Max speed</label><br>
    <input type="text" name="max_speed" value=""><br><br>
    <button type="submit" name="button">Create!</button>
  </form>

@stop

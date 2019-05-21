@extends ('layout.home-layout')

@section ('content')

  <table>
    <tr>
      <th>Id</th>
      <th>Brand</th>
      <th>Model</th>
      <th>Displacement</th>
      <th>Max Speed</th>
    </tr>
@foreach ($cars as $car)
    <tr>
      <td>{{$car->id}}</td>
      <td>{{$car->brand}}</td>
      <td>{{$car->model}}</td>
      <td>{{$car->displacement}}</td>
      <td>{{$car->max_speed}}</td>
    </tr>
@endforeach
  </table>
  <a href="{{route('cars.create')}}">Create New Car!</a>

@stop

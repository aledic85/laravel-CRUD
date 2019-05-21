@extends ('layout.home-layout')

@section ('content')

  <table>
    <tr>
      <th>Id</th>
      <th>Brand</th>
      <th>Model</th>
      <th>Displacement</th>
      <th>Max Speed</th>
      <th>Edit</th>
    </tr>
@foreach ($cars as $car)
    <tr>
      <td>{{$car->id}}</td>
      <td>{{$car->brand}}</td>
      <td>{{$car->model}}</td>
      <td>{{$car->displacement}}</td>
      <td>{{$car->max_speed}}</td>
      <td><a href="{{route('cars.edit', $car->id)}}"><i class="fas fa-edit"></i></a></td>
    </tr>
@endforeach
  </table>
  <a class="new-car" href="{{route('cars.create')}}">Create New Car!</a>

@stop

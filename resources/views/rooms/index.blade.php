@extends('layouts.app')

@section('content')
<table>
    <thead>
  <tr>
    <th>Room No.</th>
    <th>Room type</th>
  </tr>
  <tbody>
  @foreach($rooms as $room)
  <tr>
    <td>{{ $room->number}}</td>
    <td>{{ $room->room_type_id}} </td>
   
  </tr>
  @endforeach
  </tbody>
  </thead>
</table>
@endsection
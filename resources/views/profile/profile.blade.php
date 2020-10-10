@extends('layouts.app')

@section('content')
<div class="container">
    {{$user->name}} | 
    
    @if($user->id == $id)
    <a href="/edit/{{$user->id}}">Edit</a>
    @endif
    <br>
    My Bookings
</div>
@endsection

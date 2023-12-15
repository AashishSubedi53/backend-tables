@extends('layout')

@section('content')

<form action="{{route('addItemsCategory')}}" method="POST">
  
  @csrf
  <input type="text" name="name" placeholder="Category name" class="border border-slate-500 w-1/3 p-2 m-2">
  <input type="submit" value="Submit" class="bg-slate-700 text-white py-2 px-3">
</form>
<div>
@if ($errors->any())
  @foreach ($errors->all() as $error)
  <p>{{$error}}</p>
  @endforeach
  @endif
</div>

<a href="{{route('itemsCategory')}}" class="text-blue-700 font-bold m-2">Go back <- </a>


    @endsection
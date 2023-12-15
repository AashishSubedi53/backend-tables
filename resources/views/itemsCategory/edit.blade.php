@extends('layout')

@section('content')

<form action="{{route('updateCategory', $category->id)}}" method="POST">
  @csrf
  <input type="text" name="name" placeholder="Category name" value="{{$category->name}}" class="border border-slate-500 w-1/3 p-2 m-2">
  <input type="submit" value="Update" class="bg-slate-700 text-white py-2 px-3"> 
</form>
<a href="{{route('itemsCategory')}}" class="text-blue-700 font-bold m-2">Go back <-</a>

@endsection
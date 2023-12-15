@extends('layout')

@section('content')

<form action="{{route('updateItems', $item->id)}}" method="POST">
  @csrf
  <div class="flex flex-col w-1/3 m-2">
    <input type="text" name="name" placeholder="Item name" value="{{$item->name}}" class="border border-blue-300 p-2 focus:outline-none" >
    <input type="number" name="price" placeholder="Item price" value="{{$item->price}}" class="border border-blue-300 p-2 focus:outline-none" >
    <textarea name="description" placeholder="Item description" id="" cols="10" rows="10" class="border border-blue-300 p-2  focus:outline-none">{{$item->description}}</textarea>
    <button type="submit" class="bg-blue-400 p-2 text-white mt-1">Update</button>
  </div>
</form> 
<a href="{{route('items')}}" class="text-blue-700 font-bold m-2">Go back <-</a>
  
@endsection
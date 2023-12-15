@extends('layout')

@section('content')

<form action="{{route('addItems')}}" method="POST">
  @csrf
  <div class="flex flex-col w-1/3 m-2">
    <input type="text" name="name" placeholder="Item name" class="border border-blue-300 p-2 focus:outline-none">
    <select name="category_id" id="">
      @foreach($categories as $category)
      <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
    </select>
    <input type="number" name="price" placeholder="Item price" class="border border-blue-300 p-2 focus:outline-none" >
    <textarea name="description" placeholder="Item description" id="" cols="10" rows="10" class="border border-blue-300 p-2  focus:outline-none"></textarea>
    <button type="submit" class="bg-blue-400 p-2 text-white mt-1">Add</button>
  </div>
</form> 
<a href="{{route('items')}}" class="text-blue-700 font-bold m-2">Go back <-</a>
  
@endsection
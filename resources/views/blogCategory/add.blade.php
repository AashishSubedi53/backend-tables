@extends('layout')

@section('content')

<form action="{{route('addBlogCategory')}}" method="POST">
  @csrf
  <div>
    <input type="text" name="category_name" placeholder="Blog Category" class="border border-black p-2 m-2">
    <button class="bg-slate-500 p-2 text-white rounded">Add</button>
  </div>
</form>
  <a href="{{route('blogCategory')}}">Go back -<</a>
@endsection
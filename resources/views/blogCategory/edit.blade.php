@extends('layout')

@section('content')

<form action="{{route('updateBlogCategory', $cat->id)}}" method="POST">
  @csrf
  <div>
    <input type="text" name="category_name" placeholder="Blog Category" value="{{$cat->category_name}}" class="border border-black p-2 m-2">
    <button class="bg-slate-500 p-2 text-white rounded">Update</button>
  </div>
</form>
  <a href="{{route('blogCategory')}}">Go back -<</a>
@endsection
@extends('layout')

@section('content')

<div class="sm:1/3 w-1/2 sm:mx-auto my-2 sm:border border-gray-200 shadow-sm">


  
    
    <div class="p-2">
      <h1 class="sm:text-center font-medium text-[20px] mb-2">Compose Blog</h1>
      <form action="{{route('updateBlog', $blog->id)}}" method="POST">
        @csrf
        <div class="grid grid-row-4 gap-5">
          <div class="grid grid-cols-2 gap-2">
            <input type="text" placeholder="Blog Title" name="title" value="{{$blog->title}}" class="border border-gray-500 focus:outline-none sm:px-4 sm:py-2">
            <input type="text" placeholder="Author's Name" name="author_name" value="{{$blog->author_name}}" class="border border-gray-500 focus:outline-none sm:px-4 sm:py-2">

          </div>
          <input type="text" placeholder="Author's Email" name="author_email" value="{{$blog->author_email}}" class="border border-gray-500 focus:outline-none sm:px-4 sm:py-2">
          <select name="category_id" class="border border-gray-500 focus:outline-none sm:px-4 sm:py-2 text-gray-400">
            <option disabled selected value="{{$blog->category_id}}">{{$blog->BlogCategory->category_name}}</option>
            @foreach ($categories as $cat )
            
            <option value="{{$cat->id}}">{{$cat->category_name}}</option>

            @endforeach
            
          </select>
          <textarea cols="30" rows="10" name="content" placeholder="Write your content..." class="border border-gray-500 focus:outline-none sm:px-4 sm:py-2">
          {{$blog->content}}
          </textarea>
          
          <button type="submit" class="bg-blue-500 text-white font-2xl py-2">
            Update
          </button>
        </div>
      </form>
    </div>

    <a href="{{route('blog')}}" class="text-blue-700">Go back -<</a>

</div>

@endsection
@extends('layout')

@section('content')

<div>  
  <h1 class="font-bold text-center text-[24px] mb-8 mt-5">Blogs</h1>
  <a href="{{route('composeBlog')}}" class="bg-slate-500 p-2 rounded ml-[10%] text-white">Compose Blog</a>

  @foreach ($blogs as $blog )

    <div class="bg-slate-300 mt-5 mr-[10%] ml-[10%] p-2">
      <h2 class="font-bold text-[20px] mb-1">{{$blog->title}}</h2>

          
        <p>Category: {{$blog->BlogCategory->category_name}}</p>
      

      <div class="author-details flex flex-row justify-between mt-8 mb-10">
        <div class="details-container">
          <pre>-{{$blog->author_name}}</pre>
          <pre>-{{$blog->author_email}}</pre>
        </div>
        <pre>{{$blog->created_at}}</pre>
      </div>
      <section class="mb-8">
      {{$blog->content}}
      </section>

      <div class="flex flex-row space-x-2">
        <form action="{{route('editBlog', $blog->id)}}" method="GET">
          <button class="bg-slate-700 p-2 text-white rounded">
            Edit Blog
          </button>
        </form>

        <form action="{{route('deleteBlog', $blog->id)}}" method="POST">
          @csrf
          <button class="bg-rose-700 p-2 text-white rounded">
            Delete Blog
          </button>
        </form>
      </div>
    </div>
    @endforeach    
</div>
@endsection
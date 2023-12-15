@extends('layout')

@section('content')


<div class="">
  <h1 class="font-bold text-[24px] text-center mt-2 mb-2">Blog Category table</h1>
  <a href="{{route('addBlogCategory')}}" class="bg-slate-500 text-white px-4 py-2 rounded ml-1">Add Category</a>
<table class="w-full mt-5">
  <tr class="border border-black">
    <th class="border border-black">id</th>
    <th class="border border-black">Name</th>
    <th class="border border-black">Created_at</th>
    <th class="border border-black">Updated_at</th>
    <th class="border border-black">Actions</th>
  </tr>

  @foreach ($blogCategories as $cat )
    
  <tr class="text-center">
    <td class="border border-black">{{$cat->id}}</td>
    <td class="border border-black">{{$cat->category_name}}</td>
    <td class="border border-black">{{$cat->created_at}}</td>
    <td class="border border-black">{{$cat->updated_at}}</td>
    <td class="border border-black">
      <form action="{{route('editBlogCategory', $cat->id)}}" method="GET">
        <button class="bg-slate-500 text-white rounded px-6 py-2">
          Edit
        </button>
      </form>

      <form action="{{route('deleteBlogCategory', $cat->id)}}" method="POST">
        @csrf
        <button class="bg-rose-500 text-white rounded px-4 py-2">
          Delete
        </button>
      </form>
    </td>
  </tr>
  @endforeach  

</table>
</div>
 
@endsection
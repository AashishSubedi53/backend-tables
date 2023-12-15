@extends('layout')

@section('content')

<div class="px-5">
  <h1 class="text-[24px] font-bold mt-[70px] mb-5">Items Category table</h1>
  <a href="{{route('addCategory')}}" class="bg-slate-500 p-2 mb-4 text-white">Add category</a>
  <table class="border border-collapse border-black w-[100%] mt-4">
    <thead>

   
      
    <tr class="border border-black">
      <th class="border border-black">ID</th>
      <th class="border border-black">Name</th>
      <th class="border border-black">created_at</th>      
      <th class="border border-black">updated_at</th> 
      <th class="border border-black">Actions</th>
    </tr>
    </thead>



    @foreach ($categories as $cat)
    <tbody>

    
      
    
    <tr class="border border-black w-[100%] text-center">
      
      <td class="border border-black">{{$cat['id']}}</td>
      <td class="border border-black">{{$cat['name']}}</td>
      <td class="border border-black">{{$cat['created_at']}}</td>
      <td class="border border-black">{{$cat['updated_at']}}</td>      
      <td class="border border-black">
        <form action="{{route('editCategory', $cat->id)}}" method="GET">          
          <button class="bg-slate-700 p-1 px-4 text-white">
            Edit
          </button>
        </form>

        <form action="{{route('deleteCategory', $cat->id)}}" method="POST">
          @csrf
          <button class="bg-rose-600 p-1 px-4 text-white">
            Delete
          </button>      
        
        </form>
      </td>
    </tr>
    @endforeach

    </tbody>
  </table>
</div>  

@endsection
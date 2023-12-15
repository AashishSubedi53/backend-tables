@extends('layout')

@section('content')

<div class="px-5">
  <h1 class="text-[24px] font-bold mt-[70px] mb-5">Items table</h1>
  <a href="{{route('add')}}" class="bg-slate-700 p-2 text-white">Add items</a>
  <table class="border border-collapse border-black w-[100%] mt-5">
    <thead>
    <tr class="border border-black">
      <th class="border border-black">ID</th>
      <th class="border border-black">Name</th>
      <th class="border border-black">Category</th>
      <th class="border border-black">Price</th>
      <th class="border border-black">Description</th>
      <th class="border border-black">Created At</th>
      <th class="border border-black">Updated At</th>
      <th class="border border-black">Actions</th>
    </tr>
    </thead>

    <tbody>

    
    @foreach ($items as $item )
      
      
    
    <tr class="border border-black w-[100%] text-center">
      
      <td class="border border-black">{{$item->id}}</td>
      <td class="border border-black">{{$item['name']}}</td>
      <td class="border border-black">{{$item->category->name}}</td>
      <td class="border border-black">{{$item['price']}}</td>
      <td class="border border-black">{{$item['description']}}</td>
      <td class="border border-black">{{$item['created_at']}}</td>
      <td class="border border-black">{{$item['updated_at']}}</td>
      <td class="border border-black">
        <form action="{{route('editItems', $item->id)}}" method="GET">
         <button class="bg-slate-700 p-1 px-6 text-white mb-1 mt-1">Edit</button>
        </form>

        <form action="{{route('deleteItems', $item->id)}}" method="POST">
          @csrf
         <button class="bg-rose-600 p-1 px-4 text-white">Delete</button>

        </form>
      </td>
    </tr>
    @endforeach
   
    </tbody>
  </table>
</div>
  
@endsection
@extends('layout')



@section('content')
@foreach ($products  as $key => $value )
  <li><a href="{{route('product', $key)}}">{{$value}}</a></li>
@endforeach

<form action="{{route('product-form')}}" method="POST">
  @csrf
  <div class="flex flex-col space-y-3 w-1/3 m-auto">
  <input type="text" name="ProductName" placeholder="Product Name" class="border border-slate-500 focus:outline-none p-1">
  <input type="text" name="ProductPrice" placeholder="Product Price" class="border border-slate-500 focus:outline-none p-1">
  <input type="number" name="ProductQuantity" placeholder="Product Quantity" class="border border-slate-500 focus:outline-none p-1">
  <button type="submit" class="bg-slate-500 text-white py-1">Submit</button>
  </div>
</form>

<div class="px-5">
  <h1 class="text-[24px] font-bold mt-[70px] mb-5">Products table</h1>
  <table class="border border-collapse border-black w-[100%]">
    <thead>
    <tr class="border border-black">
      <th class="border border-black">ID</th>
      <th class="border border-black">Name</th>
      <th class="border border-black">Price</th>
      <th class="border border-black">Quantity</th>
      <th class="border border-black">Created At</th>
      <th class="border border-black">Updated At</th>
      <th class="border border-black">Actions</th>
    </tr>
    </thead>

    <tbody>

    @foreach ($data as $prod)
      
    
    <tr class="border border-black w-[100%] text-center">
      
      <td class="border border-black">{{$prod['id']}}</td>
      <td class="border border-black">{{$prod['ProductName']}}</td>
      <td class="border border-black">{{$prod['ProductPrice']}}</td>
      <td class="border border-black">{{$prod['ProductQuantity']}}</td>
      <td class="border border-black">{{$prod['created_at']}}</td>
      <td class="border border-black">{{$prod['updated_at']}}</td>
      <td class="border border-black"><button class="bg-rose-600 p-1 px-4 text-white">Delete</button> <button class="bg-slate-700 p-1 px-4 text-white">Edit</button></td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>


@endsection
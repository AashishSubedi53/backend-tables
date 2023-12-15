@vite('resources/css/app.css')

<div class=" bg-slate-700">
  <ul class="flex justify-start text-white font-bold p-5 px-15 space-x-5 sm:flex sm:justify-end">
      <li><a href="/">Home</a></li>
      <li><a href="/contact">Contact</a></li>
      <li><a href="{{route('about')}}">About</a></li>
      <li><a href="{{route('products')}}">Products</a></li>
      <li><a href="{{route('items')}}">Items</a></li>
      <li><a href="{{route('itemsCategory')}}">Items Category</a></li>
      <li><a href="{{route('blog')}}">Blog</a></li>
      <li><a href="{{route('blogCategory')}}">Blog Category</a></li>
      

  </ul>
</div>
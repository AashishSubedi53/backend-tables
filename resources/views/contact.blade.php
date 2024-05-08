<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body>
@include('navbar')
  <div class="sm:1/3 w-1/2 sm:mx-auto my-2 sm:border border-gray-200 shadow-sm">
    
    <div class="p-2">
      <h1 class="sm:text-center font-medium text-[20px] mb-2">Contact Us</h1>
      <form x-data="{isActive: false}" action="{{route('form')}}" method="GET">
        <div class="grid grid-row-4 gap-5">
          <div class="grid grid-cols-2 gap-2">
            <input :value='isActive' type="text" placeholder="First Name" name="firstName" class="border border-gray-500 focus:outline-none sm:px-4 sm:py-2">
            <input type="text" placeholder="Last Name" name="lastName" class="border border-gray-500 focus:outline-none sm:px-4 sm:py-2">

          </div>
          <input type="text" placeholder="Email" name="email" class="border border-gray-500 focus:outline-none sm:px-4 sm:py-2">
          <input type="text" placeholder="Phone Number" name="phone" class="border border-gray-500 focus:outline-none sm:px-4 sm:py-2">
          <textarea cols="30" rows="10" name="message" placeholder="Write your message..." class="border border-gray-500 focus:outline-none sm:px-4 sm:py-2"></textarea>
          
          <button @click="isActive = !isActive" :class="isActive ? 'bg-black' : ''" type="button" class="bg-blue-500 text-white font-2xl py-2">
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
<x-frontend-layout>
<section class="py-20">
    <div class="container">
        <h1 class="text-center text-[32px] mb-5">
        Company create
        </h1>
        {{asset('images/1763565750.png')}}
        <img src="{{asset('images/1763565750.png')}}" alt="">
        <form action="/save-company" method="POST" enctype="multipart/form-data">
            @csrf

          <div class="grid grid-cols-2 gap-5">
            <div>
                <label for="name"> Enter Company Name</label>
                <input type="text" name="name" id="name" class="w-full">
            </div>
             <div>
                <label for="phone">Enter Company Phone</label>
                <input type="text" name="phone" id="phone" class="w-full">
            </div>
             <div>
                <label for="email">Enter Company Email</label>
                <input type="text" name="email" id="email" class="w-full">
            </div>
             <div>
                <label for="address">Enter Company Address</label>
                <input type="text" name="address" id="address" class="w-full">
            </div>
            <div>
                <label for="logo">Upload Company logo</label>
                <input type="text" name="logo" id="logo" class="w-full">
            </div>
            <div>
                <button type="submit" class="cursor-pointer bg-green-500 text-white py-2 px-5 rounded-md">Save Record</button>
            </div>
          </div>
        </form>
    </div>
</section>
</x-frontend-layout>


<div>
    @vite('resources/css/app.css')
    @extends('layout.page')
    @section('content')
    <div class="bg-red-300 flex flex-col items-center justify-center h-screen">
    <form class="bg-gray-300 shadow-lg rounded-lg px-8 py-6 flex flex-col gap-4 items-center justify-center" action="/payments/create" method="POST" enctype="multipart/form-data">
        @csrf
        
        <input type="hidden" name="type" value="default_type">

        <input class="h-12 w-80 rounded-lg px-4 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" name="name" placeholder="Enter name" />
        <input class="h-12 w-80 rounded-lg px-4 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" name="phone" placeholder="Enter phone" />
        <input class="h-12 w-80 rounded-lg px-4 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" name="amount" placeholder="Enter amount" />
        <input class="h-12 w-80 rounded-lg px-4 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" name="remarks" placeholder="Enter remarks" />

        <select class="h-12 w-80 rounded-lg px-4 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500" name="mode" id="payment">
            <option value="cash">Cash</option>
            <option value="card">Online</option>
            <option value="bank transfer">Bank Transfer</option>
        </select>

        <select class="h-12 w-80 rounded-lg px-4 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500" name="order_id" id="order_id">
            @foreach ($orders as $item)
                <option value="{{ $item->id }}">{{ $item->type }}</option>
            @endforeach
        </select>
        <input type="file" name="photo" placeholder="image/jpg,image/png"/>

        <button class="h-12 w-80 bg-blue-500 hover:bg-blue-600 rounded-lg text-white font-semibold focus:outline-none focus:ring-2 focus:ring-blue-500" type="submit">Submit</button>
    </form>
</div>

<div>
    @vite('resources/css/app.css')
    @extends('layout.page')
    @section('content')
    <div class="bg-red-300 flex flex-col items-center justify-center h-screen">
    <form class="bg-gray-300 shadow-lg rounded-lg px-8 py-6 flex flex-col gap-4 items-center justify-center" action="/payments/create" method="POST">
        @csrf
        <input class="h-12 w-80 rounded-lg px-4 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500" type='text' name="amount" placeholder="Enter amount" />
        <input class="h-12 w-80 rounded-lg px-4 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500" type='text' name="remarks" placeholder="Enter remarks" />
        <select class="h-12 w-80 rounded-lg px-4 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500" name="order_id" id="">
            @foreach ($orders as $item)
            <option value="{{ $item->id }}">{{ $item->type }}</option>
            @endforeach
        </select>
        <button class="h-12 w-80 bg-blue-500 hover:bg-blue-600 rounded-lg text-white font-semibold focus:outline-none focus:ring-2 focus:ring-blue-500" type="submit">Submit</button>
    </form>
</div>
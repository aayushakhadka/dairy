@vite('resources/css/app.css')
@extends ('layout.page')
@section('content')
<div class=" bg-gray-300  h-screen flex flex-col mx-auto">
    <h1 class="text-3xl font-bold mb-4">List</h1>
    <table class="w-full border-collapse border border-gray-200">
        <thead>
            <tr>
                <th class="border border-gray-800 px-4 py-2">Date</th>
                <th class="border border-gray-800 px-4 py-2">Time</th>
                <th class="border border-gray-800 px-4 py-2">Quantity</th>
                <th class="border border-gray-800 px-4 py-2">Type</th>
                <th class="border border-gray-800 px-4 py-2">Price</th>
                <th class="border border-gray-800 px-4 py-2">Delete</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $item)
            <tr>
                <td class="border border-gray-800 px-4 py-2">{{$item->date}}</td>
                <td class="border border-gray-800 px-4 py-2">{{$item->time}}</td>
                <td class="border border-gray-800 px-4 py-2">{{$item->quantity}}</td>
                <td class="border border-gray-800 px-4 py-2">{{$item->type}}</td>
                <td class="border border-gray-800 px-4 py-2">{{$item->price}}</td>
                <!-- <td class="border border-gray-800 px-4 py-2"><a href="/orders/edit/{{$item->id}}" class="text-blue-500 hover:text-blue-700">Edit</a></td> -->
                <td class="border border-gray-800 px-4 py-2">
                    <form action="/orders/{{$item->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" >Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
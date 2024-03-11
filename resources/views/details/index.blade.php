@extends ('layout.page')
@section('content')
@vite('resources/css/app.css')

<div class="bg-gray-200 min-h-screen flex flex-col items-center justify-center gap-4 p-4 font-display">
    <h1 class="text-3xl font-display text-black">List</h1>
    <div class="overflow-auto">
        <table class="border-collapse border border-white w-full">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="px-4 py-2 border-[2px] border-black ">Quantity</th>
                    <th class="px-4 py-2 border-[2px] border-black">Type</th>
                    <th class="px-4 py-2 border-[2px] border-black">Price</th>
                    <th class="px-4 py-2 border-[2px] border-black">Edit</th>
                    <th class="px-4 py-2 border-[2px] border-black">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($details as $item)
                <tr class="bg-gray-200 hover:bg-gray-300 border-[2px] border-black">
                    <td class="px-4 py-2 border-[2px] border-black">{{$item->quantity}}</td>
                    <td class="px-4 py-2 border-[2px] border-black">{{$item->type}}</td>
                    <td class="px-4 py-2 border-[2px] border-black">{{$item->price}}</td>
                    <td class="px-4 py-2">
                        <a href="/details/edit/{{$item->id}}" class="text-blue-500 hover:underline ">Edit</a>
                    </td>
                    <td class="px-4 py-2 border-[2px] border-black">
                        <form action="/details/{{$item->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="/details/create" class="text-black">Add Details</a>
</div>

@endsection
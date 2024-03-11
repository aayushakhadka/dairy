@extends ('layout.page')
@section('content')
@vite('resources/css/app.css')

<div class="flex flex-col h-screen items center justify-center w-full bg-yellow-800">
    <table class="fex items-center justify-center w-[20rem] bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-300 w-[30rem] text-white text-black">
            <tr>
                <th class="px-4 py-2 border-[2px] border-black">Amount</th>
                <th class="px-4 py-2 border-[2px] border-black">Remarks</th>
                <th class="px-4 py-2 border-[2px] border-black">Type</th>
            </tr>
        </thead>
        <tbody class="bg-gray-100">
            @foreach ($payments as $item)
            <tr>
                <td class="px-4 py-2 border-[2px] border-black">{{ $item->amount }}</td>
                <td class="px-4 py-2 border-[2px] border-black">{{ $item->remarks }}</td>
                <td class="px-4 py-2 border-[2px] border-black"><a href="/payments/edit/{{$item->id}}" class="text-blue-500 hover:underline">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/payments/create" class=" flex items-center justify-center mt-4 bg-blue-500 w-[20rem] hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg inline-block">Add New Payment</a>
</div>
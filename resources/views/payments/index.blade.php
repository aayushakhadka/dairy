@extends ('layout.page')
@section('content')
@vite('resources/css/app.css')


<div class="flex flex-col h-screen items-center w-full bg-gray-200">
<h1 class="text-black font-bold mt-[2rem] pb-[1rem]">Payments Detail</h1>

    <table class="fex items-center justify-center w-[20rem] bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-400 w-[30rem] text-black">
            <tr>
            <th class="px-4 py-2 border-[2px]  border-black">Name</th>
                <th class="px-4 py-2 border-[2px] border-black">Phone</th>
                <th class="px-4 py-2 border-[2px]  border-black">Amount</th>
                <th class="px-4 py-2 border-[2px] border-black">Remarks</th>
                <th class="px-4 py-2 border-[2px] border-black">Type</th>

                <th class="bpx-4 py-2 border-[2px] border-black">Delete</th>
                <!-- <th class="px-4 py-2 border-[2px] border-black">Edit</th> -->
               
            </tr>
        </thead>
        <tbody class="bg-gray-100">
            @foreach ($payments as $item)
            <tr>
            <td class="px-4 py-2 border-[2px] border-black">{{ $item->name }}</td>
            <td class="px-4 py-2 border-[2px] border-black">{{ $item->phone }}</td>
                <td class="px-4 py-2 border-[2px] border-black">{{ $item->amount }}</td>
                <td class="px-4 py-2 border-[2px] border-black">{{ $item->remarks }}</td>
                <td class="px-4 py-2 border-[2px] border-black">{{ $item->order->type }}</td>
                
                <!-- <td class="px-4 py-2 border-[2px] border-black"><a href="/payments/edit/{{$item->id}}" class="text-blue-500 hover:underline">Edit</a></td> -->
               
                <td class="px-4 py-2 border-[2px] border-black">
                <form action="/payments/{{$item->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" >Delete</button>
                    </form>
</td>
            </tr>
            <tr>
                <td>
                <img src="{{$item->photo}}" alt="">
            </td>
            
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/payments/create"> </a>
</div>
@endsection
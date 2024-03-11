<div class="">
    @vite('resources/css/app.css')
    @extends('layout.page')
    @section('content')

    <div class="flex flex-col items-center justify-center gap-4 font-display bg-yellow-500 h-screen ">
        <div class='flex shadow-md shadow-gray-800 rounded-tl-[3rem] rounded-br-[3rem] '>
            <img src='https://cdn.pixabay.com/photo/2017/07/05/15/41/milk-2474993_1280.jpg' class="h-[30rem] w-[28rem] opacity-80 bg-black rounded-tl-[3rem] " />

            <div class="p-6 bg-gray-100 rounded-br-[3rem] w-[28rem]  flex flex-col items-center justify-center ">
                <form class="flex flex-col gap-3" action="/details/create" method="POST">
                    @csrf
                    <label class="text-xl font-bold" for="quantity">Quantity</label>
                    <input class="w-[25rem] h-[3rem] rounded-xl outline-0 border-none bg-gray-300" type='text' name="quantity" placeholder="quantity" />

                    <label class="text-xl font-bold" for="type">Type</label>
                    <input class="rounded-xl outline-0 border-none  h-[3rem]  bg-gray-300 " type='text' name="type" placeholder="Type" />
                    <label class="text-xl font-bold " for="price">Price</label>

                    <input class="rounded-xl outline-0 border-none h-[3rem]  bg-gray-300 " type='text' name="price" placeholder="price" />


                    <button class="h-[3rem] bg-amber-700 rounded-xl mt-[1rem] text-white font-display text-xl" type='submit'>submit</button>


                </form>
            </div>
        </div>

    </div>
</div>
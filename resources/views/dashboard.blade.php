<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
   
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            
            </div>
        </div>
    </div>
    
    <div class="flex flex-col items-center justify-center ">
    <a class="flex items-center justify-center bg-blue-700 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded h-10 w-32 mb-4" href="/payments">PAYMENTS</a>
    <a class="flex items-center justify-center bg-green-700 hover:bg-green-600 text-white font-bold py-2 px-4 rounded h-10 w-32" href="/orders">ORDERS</a>
</div>

</x-app-layout>

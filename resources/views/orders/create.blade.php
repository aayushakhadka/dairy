<div>
@vite('resources/css/app.css')
@extends('layout.page')
@section('content')
<div class="bg-gray-100 h-screen p-8">
    <form action="/orders/create" method="POST" class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
        @csrf
        <div class="mb-4">
            <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
            <input type='date' id="date" name="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Date" />
        </div>
        <div class="mb-4">
            <label for="time" class="block text-sm font-medium text-gray-700">Time</label>
            <input type='time' id="time" name="time" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Time" />
        </div>
        <div class="mb-4">
            <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
            <input type='text' id="quantity" name="quantity" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Quantity" oninput="updatePrice()" />
        </div>
        <div class="mb-4">
            <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
            <select id="type" name="type" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" onchange="updatePrice()">
                <option value="cow_milk">Cow Milk</option>
                <option value="buffalo_milk">Buffalo Milk</option>
                <option value="goat_milk">Goat Milk</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
            <input type='text' id="price" name="price" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Price" readonly />
        </div>
        <button type='submit' class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
    </form>
</div>

<script>
   function updatePrice() {
    var quantityInput = document.getElementById('quantity').value;
    var quantity = parseFloat(quantityInput);
    // If quantity is NaN or empty, default it to 0
    if (isNaN(quantity) || quantityInput.trim() === '') {
        quantity = 0;
    }

    var type = document.getElementById('type').value;
    var pricePerLitre = 0;
    
    // Determine price per litre based on selected type
    if (type === 'cow_milk') {
        pricePerLitre = 100;
    } else if (type === 'buffalo_milk') {
        pricePerLitre = 200;
    } else if (type === 'goat_milk') {
        pricePerLitre = 150;
    }
    
    // Calculate total price
    var totalPrice = quantity * pricePerLitre;
    
    // Update the price input field
    document.getElementById('price').value = totalPrice.toFixed(2); // Fixed to 2 decimal places
}
</script>

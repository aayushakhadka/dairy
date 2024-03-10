<div>
    @vite('resources/css/app.css')
    @extends('layout.page')
    @section('content')
    <form action="/payments/create" method="POST">
        @csrf
        <input type='text' name="amount" placeholder="amount" />
        <input type='text' name="remarks" placeholder="remarks" />
        <select name="category_id"  id="">
        
    </select>
    <button type="submit">Submit</button>
</form>




</div>
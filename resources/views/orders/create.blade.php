<div>
@vite('resources/css/app.css')
@extends('layout.page')
@section('content')
<form action="/orders/create" method="POST" >
    @csrf
    <input type='date' name="date" placeholder="date" />
    <input type='time' name="time" placeholder="Time" />
    <input type='text' name="quantity" placeholder="quantity" />
    <input type='text' name="type" placeholder="type" />
    <input type='text' name="price" placeholder="price" />




    <button type='submit'>submit</button>
           

</form>
</div>
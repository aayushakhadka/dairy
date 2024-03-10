<div>
@vite('resources/css/app.css')
@extends('layout.page')
@section('content')
<form action="/details/create" method="POST" >
    @csrf
    <input type='text' name="quantity" placeholder="quantity" />
    <input type='text' name="type" placeholder="Type" />
    <input type='text' name="price" placeholder="price" />


    <button type='submit'>submit</button>
           

</form>
</div>
@vite('resources/css/app.css')
@extends('layout.page')
@section('content')
<form action='/orders/update/{{$orders->id}}' method="POST">
    @csrf
    @method('PATCH')
    <input type='text' name="date" placeholder="date" />
    <input type='text' name="time" placeholder="Time" />
    <input type='text' name="quantity" placeholder="quantity" />
    <input type='text' name="type" placeholder="type" />
    <input type='text' name="price" placeholder="price" />

<button type="submit">Edit</button>
</form>
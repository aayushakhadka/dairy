@vite('resources/css/app.css')
@extends('layout.page')
@section('content')
< action='/details/update/{{$details->id}}' method="POST">
    @csrf
    @method('PATCH')
    <input type='text' name="quantity" placeholder="quantity" />
    <input type='text' name="type" placeholder="Type" />
    <input type='text' name="price" placeholder="price" />
<button type="submit">Edit</button>
    
</form>
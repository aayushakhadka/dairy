@vite('resources/css/app.css')
@extends ('layout.page')
@section('content')
<div class="">
    <table border="1">
        <h1 class="text-3xl">List</h1>
        <th>Date</th>
        <th>Time</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Type</th>
        <th>Edit</th>
        <th>delete</th>


        @foreach($orders as $item)

        <tr>
            <td>{{$item->date}}</td>
            <td>{{$item->time}}</td>
            <td>{{$item->quantity}}</td>
            <td>{{$item->type}}</td>
            <td>{{$item->price}}</td>



            <td><a href="/orders/edit/{{$item->id}}">Edit</a></td>

            <td>
                <form action="/orders/{{$item->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>

                </form>
            </td>

        </tr>
        @endforeach
    </table>
    <a href="/orders/create">Add Details</a>

</div>
@endsection
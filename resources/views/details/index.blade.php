@vite('resources/css/app.css')
@extends ('layout.page')
@section('content')
<div class="">
    <table border="1">
        <h1 class="text-3xl">List</h1>
        <th>Quantity</th>
        <th>Type</th>
        <th>Edit</th>
        <th>delete</th>


        @foreach($details as $item)

        <tr>
            <td>{{$item->quantity}}</td>
            <td>{{$item->type}}</td>
            <td>{{$item->price}}</td>

            <td><a href="/details/edit/{{$item->id}}">Edit</a></td>

            <td>
                <form action="/details/{{$item->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>

                </form>
            </td>

        </tr>
        @endforeach
    </table>
    <a href="/details/create">Add Details</a>

</div>
@endsection
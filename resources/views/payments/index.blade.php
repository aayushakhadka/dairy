@extends ('layout.page')
@section('content')
<div>
    <table>
       

        @foreach ($payments as $item)
        <tr>
            <td>{{ $item->amount }}</td>
            <td>{{ $item->remarks }}</td>
            <td>{{ $item->order->name }}</td>
            <td><a href="/payments/edit/{{$item->id}}">Edit</a></td>
           
        </tr>
        @endforeach
    </table>
    <a href="/payments/create">Add New Product</a>

</div>
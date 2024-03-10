@extends ('layout.page')
@section('content')
<form action="/payments/update/{{$payments->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <input type='text' name="name" placeholder='name' value="{{$payment->amount}}" />
    
    <select name="order_id" id="">
      
    </select>
    <button>edit</button>

</form>
@endsection
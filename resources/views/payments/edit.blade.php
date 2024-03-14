@extends ('layout.page')
@section('content')
<form action="/payments/update/{{$payments->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <input type='text' name="name" placeholder='name' value="{{$payment->name}}" />
    <input type='text' name="phone" placeholder='phone' value="{{$payment->phone}}" />
    <input type='text' name="name" placeholder='name' value="{{$payment->amount}}" />
    <input type='text' name="remarks" placeholder='remarks' value="{{$payment->remarks}}" />
    <input type='text' name="type" placeholder='type' value="{{$payment->type}}" />
    <select name="order_id" id="">
      
    </select>
    
    <!-- <button>edit</button> -->

</form>
@endsection
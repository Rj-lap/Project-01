@extends('Master')
@section('con')
<div class="container">
  <div class="row">
    <div class="col-lg-5">
      <h1>Cart</h1>
      <form method="POST">
        @csrf
     

  <div class="form-group">
    <label for="exampleInputPassword1">ADD CART</label>
    <input type="number" class="form-control" name="qnty" value="1" id="exampleInputPassword1">
  </div>
  
  <input type="submit" name="addcart" class="btn btn-primary btn-block" value="ADD CART">
   <!--  <input type="submit" class="btn btn-primary" value="@if(Request::segment(2)){{'UPDATE'}}@else{{'ADD'}}@endif" name="@if(Request::segment(2)){{'update_cart'}}@else{{'add_cart'}}@endif"> -->
</form>
    </div>
  </div>
</div>
@endsection
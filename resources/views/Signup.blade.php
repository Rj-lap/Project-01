@extends('Master')
@section('con')


<div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12 ">
                    <div class="contact-info-left">
                        <h2>LOGIN INFO</h2>
                        <p> 
A login, logging in or logging on is the entering of identifier information into a system by a user in order to access that system (e.g., a computer or a website). It is an integral part of computer security procedures. </p>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>GET IN TOUCH</h2>
                        <p>YOU ARE VERY IMPORTANT PERSONS FOR US.</p>
                       <div class="container">

                          <form method="POST" enctype="multipart/form-data">
        @csrf
         <div class="form-group">
      <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('name') }}" placeholder="Name">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  
  </div>
  <div class="form-group">
    
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}" placeholder="Email">
   @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  <div class="form-group">
    <!-- <label for="exampleInputPassword1">Password</label> -->
    <input type="password" class="form-control" placeholder="Password" name="passwd" id="exampleInputPassword1" value="{{ old('passwd') }}">
    @error('passwd')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
   <div class="row mb-3">
                  <!-- <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label> -->
                  <div class="col-sm-10">
                    <input class="form-control" type="file" placeholder="File Upload" name="home_ima" id="home_ima">
                  </div>
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1" value="">Role</label>
          <select class="form-group" name="role_id">

      
      <option value="2">Buyer</option>
      
    </select>
  </div>
  <input type="submit" name="signup" class="btn btn-primary btn-block" value="signup">
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
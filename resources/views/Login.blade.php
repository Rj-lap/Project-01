@extends('Master')
@section('con')


    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12 mb-4">
                    <div class="contact-info-left">
                        <h2>LOGIN INFO</h2>
                        <p> 
A login, logging in or logging on is the entering of identifier information into a system by a user in order to access that system (e.g., a computer or a website). It is an integral part of computer security procedures. </p>
                       
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>GET IN TOUCH</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio justo, ultrices ac nisl sed, lobortis porta elit. Fusce in metus ac ex venenatis ultricies at cursus mauris.</p>
                       <div class="container">

                           <form method="POST">
                             @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                         <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                </div>
                               
                                <div class="col-md-12">
                                   
                                    <div class="submit-button text-center">
                                       <input type="submit" name="login" class="btn btn-primary btn-block" value="login">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
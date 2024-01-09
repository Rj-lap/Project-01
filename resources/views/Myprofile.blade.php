@extends('Master')
@section('con')
<style>
	body {
    /*background: rgb(99, 39, 120)*/
    background: black;
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>
<div class="container rounded bg-white mt-5 mb-5">
	@if($user)
	@foreach($user as $d)
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{url('UserLogin/'.$d->profile)}}"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
               
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">NAME</label><input type="text" class="form-control" placeholder="enter phone number" value="{{$d->name}}"></div>
                    <div class="col-md-12"><label class="labels">E-MAIL</label><input type="text" class="form-control" placeholder="enter address line 1" value="{{$d->email}}"></div>
                    <div class="col-md-12"><label class="labels">PASSWORD</label><input type="text" class="form-control" placeholder="enter address line 2" value="{{$d->password}}"></div>
                    
                </div>
               	
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <p>ITS YOUR PROFILE 
                YOU CAN SEE YOUR INFORMATION WHAT YOU HAVE SUBMITED ON OUR WEBSITE</p>
            </div>
        </div>
    </div>
    @endforeach
    @endif
</div>

@endsection
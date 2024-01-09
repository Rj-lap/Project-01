@extends('Admin.Master')
@section('con')


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Product Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}">
                  </div>
                </div>
               <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-10">
                    <input type="text" name="product_price" class="form-control" value="{{$product->product_price}}">
                  </div>
                </div>
               
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="product_ima" id="formFile">
                    {{$product->product_image}}
                  </div>
                </div>
              

              
              
               

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Category</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="category" value="">
                      <!-- <option selected>{{$product->cat_id}}</option> -->
                      <option value="">Selected Categroy</option>
                      <!-- @if($categroy) -->
                      @foreach($categroy as $c)
                      <option value="{{$c->id}}" {{$product->cat_id == $c->id?'selected':''}}>{{$c->category_name}}</option>
                      @endforeach
                      <!-- @endif -->
                    </select>
                  </div>
                </div>
                 <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" >Brand</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="brand" value="">
                      <!-- <option selected>{{$product->brand_id}}</option> -->
                      <option value="">Selected Brand</option>
                      @foreach($brand as $b)
                      <option value="{{$b->id}}" {{$product->brand_id == $b->id?'selected':''}}>{{$b->brand_name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                  
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Discription</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="product_description">{{$product->product_description}}</textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  
                  <div class="col-sm-10">
                    <input type="submit" class="btn btn-primary" value="@if(Request::segment(3)){{'UPDATE'}}@else{{'ADD'}}@endif" name="@if(Request::segment(3)){{'update_product'}}@else{{'add_product'}}@endif">
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

      
      </div>
    </section>

  </main><!-- End #main -->

  
  
@endsection
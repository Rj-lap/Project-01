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
                  <label for="inputText" class="col-sm-2 col-form-label">Categroy Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="categroy_name" class="form-control" value="{{$categroy->category_name }}">
                  </div>
                </div>
          
                <div class="row mb-3">
                  
                    <div class="col-sm-10">
                    <input type="submit" class="btn btn-primary" value="@if(Request::segment(3)){{'UPDATE'}}@else{{'ADD'}}@endif" name="@if(Request::segment(3)){{'update_cat'}}@else{{'add_cat'}}@endif">
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
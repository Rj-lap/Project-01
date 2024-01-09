@extends('Master')
@section('con')
<section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="{{url('pomato/')}}/images/banner.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span>All New Products </span>
                            <h1>up to 25% Flat Sale</h1>
                            
                            
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="{{url('pomato/')}}/images/banner-0.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span>Awosome Ranges </span>
                            <h1>Cross the Limite</h1>
                            
                            
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="{{url('pomato/')}}/images/banner-1.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span>Beauty Product's</span>
                            <h1>About Our Website</h1>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>

    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                     
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Categories</h3>
                            </div>
                               <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                
                                            @if($categroy)
                                            @foreach($categroy as $c)
                                            <div class="Check check-danger">
                                                <input name="categries" class="commn_click categroy" value="{{$c->category_name}}" type="checkbox">
                                                <label for="checkbox1">{{$c->category_name}}</label>
                                                <!--  <input name="survey" class="cat_click" value="{{$c->id}}" type="radio">
                                            <label for="Radios1">{{$c->category_name}}</label> -->
                                            </div>
                                           <!--  <a href="#" class="list-group-item list-group-item-action active">{{$c->category_name}} <small class="text-muted">(50)</small></a> -->
                                            @endforeach
                                            @endif
                                       
                                    
                                </div>
                            
                        </div>
                        
                       <div class="filter-brand-left">
                            <div class="title-left">
                                <h3>Brand</h3>
                            </div>
                            <div class="brand-box">
                                <ul>
                                    @if($brand)
                                    @foreach($brand as $b)
                                    <li>
                                        <div class="radio radio-danger">
                                            <input name="brand" class="commn_click brand" value="{{$b->brand_name}}" type="radio">
                                            <label for="Radios1">{{$b->brand_name}}</label>
                                        </div>
                                    </li>
                                    @endforeach
                                    @endif    
                                  
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        

                        <div class="row product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row products_data">
                                        @if($product)
                                        @foreach($product as $p)
                                       <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="{{url('pomato/')}}/images/img-pro-01.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                           
                                                        </ul>
                                                        <a class="cart" href="{{route('addcart',$p->id)}}">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>{{$p->product_description}}</h4>
                                                    <h5>{{$p->product_price}}</h5>
                                                    <h5>{{$p->category_name}}</h5>
                                                    <h5 style="color: red">{{$p->brand_name}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif

                                       
                                    </div>
                                </div>
                               
                                <div role="tabpanel" class="tab-pane fade" id="list-view">
                                    <div class="list-view-box">
                                        <div class="row">
                                             @if($product)
                                @foreach($product as $p)
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3" >
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="new">New</p>
                                                        </div>
                                                        <img src="{{url('ProductImage/'.$p->product_image)}}" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8 ">
                                                <div class="why-text full-width">
                                                
                                                    <h4>{{$p->product_description}}</h4>
                                                    <h5>{{$p->product_price}}</h5>
                                                    <h5>{{$p->category_name}}</h5>
                                                    <h5 style="color: red">{{$p->brand_name}}</h5>
                                                
                                                </div>
                                            </div>
                                             @endforeach
                                @endif
                                        </div>
                                    </div>
                                   
                                </div>
                               
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->

    <!-- Start Instagram Feed  -->
  
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->

@endsection
@push('filter')
<script type="text/javascript">
    $(document).ready(function(){
        get_products();

        function get_filter(class_name){
            var filter = [];
            $('.'+class_name+':checked').each(function(){
                filter.push($(this).val());
            });
            return filter;
            //console.log(filter);

        }
        $(document).on('click','.commn_click',function(){

            var brand  = get_filter('brand');
            var cat  = get_filter('categroy');
            
            

            $.ajax({
                url:"{{route('filter')}}",
                type:'GET',
                // dataType:'json',
                data:{brand:brand,cat:cat},
                success:function(res){
                    console.log(res);
                    if(res){
                        $('.products_data').html(res);
                         //alert('find');
                    }else{
                        alert('No Record Found');
                    }
                   
                    
                }
            });

        });

      
    });
 
    function get_products(){
        $.ajax({
            url:"{{route('filter')}}",
            type:'GET',
            success:function(res){
                // console.log('fff');
                if(res){
                        $('.products_data').html(res);
                }else{
                    // alert('Not Find');
                }
                
            }
        });
    }

    

</script>
@endpush
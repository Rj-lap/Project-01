@extends('Master')
@section('con')



    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $subtotal = 0;?>
                                @if($cart)
                                @foreach($cart as $c)
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
									<img width="50px" class="img-fluid" src="{{url('ProductImage/'.$c->product_image)}}" alt="" />
								</a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
									{{$c->product_name}}
								</a>
                                    </td>
                                    <td class="price-pr">
                                        <p>{{$c->product_price}}</p>
                                    </td>
                                    <td class="quantity-box">
                                        <p>{{$c->qnty}}</p>
                                    </td>
                                    <td class="total-pr">
                                        <p>{{$total = $c->qnty*$c->product_price}}</p>
                                        <?php $subtotal = $total + $subtotal ?>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="{{route('deletecart',$c->id)}}" class="btn btn-danger">DELETE
									
								</a>
                                    <a href="javascript:void(0)" class="btn btn-warning buy_now" data-price={{$c->product_price}} data-id={{$c->id}} data-qnty={{$c->qnty}} >BOOK NOW</a>
                               
                           
                                 <a href="{{route('editcart',$c->id)}}" class="btn btn-warning" >EDIT</a>
                                 </td>
                                   
                                </tr>
                              
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

          
            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Order summary</h3>
                        <div class="d-flex">
                            <h4>Sub Total</h4>
                            <div class="ml-auto font-weight-bold"> {{$subtotal}} </div>
                        </div>
                       
                        <hr> </div>
                </div>
                <div class="col-12 d-flex shopping-box"><a href="checkout.html" class="ml-auto btn hvr-hover">Checkout</a> </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->

@endsection
@push('payment')
   <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
   <script type="text/javascript">
    $(document).ready(function(){
      $('body').on('click','.buy_now',function(){

         var product_id = $(this).attr('data-id');
         var product_price = $(this).attr('data-price');
         var qnty = $(this).attr('data-qnty');
         
         var options = {
            "key": "rzp_test_5BJ0UzgTnLx2OL",
            "currency": "INR",
            "amount":product_price*100*qnty,
            "description": "Test Razoper",
            "handler": function (response){
                  //console.log(response.razorpay_payment_id);

                  $.ajaxSetup({
                     headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     }
                  });
                  $.ajax({
                     url: "{{route('pay')}}",
                     type: "post",
                     dataType: "json",
                     data: {
                        razorpay_payment_id: response.razorpay_payment_id ,product_id : product_id,product_price:product_price,qnty:qnty
                     }, 
                     success: function (msg) {
                        alert('successful payment');

                       // window.location.href = "{{route('home')}}";
                    }
                 });
               },
               "theme": {
                  "color": "#F37254"
               }
            };


            var rzp1 = new Razorpay(options);
            rzp1.open();
      });
   });
</script>
@endpush    
 
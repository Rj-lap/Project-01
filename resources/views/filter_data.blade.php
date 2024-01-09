
                                        @if($product)
                                        @foreach($product as $p)
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="{{url('ProductImage/'.$p->product_image)}}" class="img-fluid" alt="Image" width="900px">
                                                    <div class="mask-icon">
                                                        <ul>
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

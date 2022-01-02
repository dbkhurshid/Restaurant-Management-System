
    <div id="menu" class="menu-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Our Menu 	
					</h2>
                        <p class="title-caption text-center">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                    </div>
                    <div class="tab-menu">
                        <div class="slider slider-nav">
                            <div class="tab-title-menu">
                                <h2>STARTERS</h2>
                                <p> <i class="flaticon-canape"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>MAIN DISHES</h2>
                                <p> <i class="flaticon-dinner"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>DESERTS</h2>
                                <p> <i class="flaticon-desert"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>DRINKS</h2>
                                <p> <i class="flaticon-coffee"></i> </p>
                            </div>
                        </div>
                        <div class="slider slider-single">
                            <div>
                            	@foreach ($data as $data)
                            	<form action="{{url('/addcart',$data->id)}}" method="post">

                            		@csrf	

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="foodimage/{{$data->image}}" alt="" class="img-responsive">
                                        <div>
                                            <h3>{{$data->title}}</h3>
                                            <p>
                                                {{$data->description}}
                                            </p>
                                        </div>
                                        <span class="offer-price">{{$data->price}}</span>

                                    </div>
                                   <input type="number" name="quantity" min="1" value="1" style="width: 80px;">
                        		<input type="submit" value="Add to cart">
                                </div>


                            </form>

                    
                                @endforeach
                                
                                                                <!-- end col -->
                            </div>
                        </div>

                        <!--  <input type="number" name="quantity" min="1" value="1" style="width: 80px;">
                        <input type="submit" value="add cart"> -->
                    
                    </div>
                    <!-- end tab-menu -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end menu -->
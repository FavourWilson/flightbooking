@include('header')
 <!-- Banner Section -->
 <section class="inner-banner">
        <div class="image-layer" style="background-image: url(images/background/banner-image-1.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h2>Cost For Flight</h2>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><span class="icon-home fa fa-home"></span><a href="i{{url('welcome')}}">Home</a></li>
                        <li class="current">Flight Cost</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->
    <section class="wishlist-section">
        <div class="auto-container">
            <!--Cart Outer-->
            <div class="wishlist-outer">
                <div class="table-outer">
                    <div class="table-box">
                        <table class="wishlist-table" style="background:gray !important; color:#fff !important; font-weight: 4x00">
                            <tbody>
                                <tr>
                                  
                                    <td class="prod-column info-column">
                                        <div class="info-box" >

                                            <h4 class="prod-title" style="color:#fff !important">Per Adult: <span>${{$data->adultcost}}</span></h4>
                                            <div class="price" style="color:#fff !important">Per Children : <span>${{$data->childrencost}}</span></div>
                                            <div class="price" style="color:#fff !important">booking: <span>${{$data->cost}}</span></div>
                                       
                                        </div>
                                    </td>
                                    <td class="avail">
                                    @foreach($sch as $schs)
                                            
                                            <h4 class="prod-title">Country: <span>{{$schs->country}}</span></h4>
                                            <div class="price">Travel Date : <span>{{$schs->travelDate}}</span></div>
                                            <div class="price">Travel Time: <span>{{$schs->travelTime}}</span></div>
                                            <div class="price">Arrival Date: <span>{{$schs->ArrivalDate}}</span></div>
                                            <div class="price">Available Flight: <span>{{$schs->availableFlight}}</span></div>
                                            <div class="price">Number of Stops: <span>{{$schs->noofstops}}</span></div>
                                            <div class="price">cost: <span>{{$schs->cost}}</span></div>
                                        @endforeach
                                    </td>

                                    <td>Total:${{$data->cost + (($data->noofadult * 200) + ($data->noofchildren * 100))}}</td>


                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                
                    

                </div>
            </div>
        </div>
    </section>

    <section class="wishlist-section">
        <div class="auto-container">
            <!--Cart Outer-->
            <div class="wishlist-outer">
                <div class="table-outer">
                    <div class="table-box">
                        <table class="wishlist-table">
                            <tbody>
                                <tr>
                                  
                                    <td class="prod-column info-column">
                                        <div class="info-box">
                                       
                                        </div>
                                    </td>
                                    <!-- <td class="avail">
                                        <div class="add-btn"><a href="{{url('booking')}}" class="theme-btn add-cart-btn"><span><i class="far fa-shopping-cart"></i> Book Flight</span></a></div>
                                    </td> -->
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                
                    

                </div>
            </div>
        </div>
    </section>
    <!--Booking Section-->
    
@include('footer')
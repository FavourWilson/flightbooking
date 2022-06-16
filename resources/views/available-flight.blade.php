@include('header')

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
                                            <form method="POST" action="{{url('')}}">
                                                @foreach($sch as $schs)
                                                <input type="text" name="schid" id="" hidden>
                                                    <div class="prod-title">Country: <span name="country">{{$schs->country}}</span></div>
                                                    <div class="price">Travel Date : <span name="tdate">{{$schs->travelDate}}</span></div>
                                                    <div class="price">Travel Time: <span name="ttime">{{$schs->travelTime}}</span></div>
                                                    <div class="price">Arrival Date: <span name="adate">{{$schs->ArrivalDate}}</span></div>
                                                    <div class="price">Available Flight: <span name="aflight">{{$schs->availableFlight}}</span></div>
                                                    <div class="price">Number of Stops: <span name="noofstop">{{$schs->noofstops}}</span></div>
                                                    <div class="price">Cost: <span name="cost">{{$schs->cost}}</span></div>
                                                @endforeach
                                            </form>
                                        </div>
                                    </td>
                                    <td class="avail">
                                        <div class="add-btn"><a href="{{url('booking')}}" class="theme-btn add-cart-btn"><span><i class="far fa-shopping-cart"></i> Book Flight</span></a></div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                
                    

                </div>
            </div>
        </div>
    </section>

@include('footer')
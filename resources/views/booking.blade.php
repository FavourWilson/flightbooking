@include('header')
 <!-- Banner Section -->
 <section class="inner-banner">
        <div class="image-layer" style="background-image: url(images/background/banner-image-1.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h2>Booking</h2>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><span class="icon-home fa fa-home"></span><a href="index.html">Home</a></li>
                        <li class="current">Booking</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Booking Section-->
    <section class="booking-section">
        <div class="floated-icon left"><img src="images/resource/stones-left.svg" alt="" title=""></div>
        <div class="floated-icon right"><img src="images/resource/stones-right-3.svg" alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <h2><span>Book This Tour</span></h2>
                <div class="text">Contact us and get strapped in for a better adventure experience in your life-time. Just look for opportunity to be with nature. </div>
            </div>
            <div class="form-box site-form">
                <div class="booking-form">
                    <form method="POST" action="{{url('booking')}}">
                    {{ csrf_field() }}
                        <div class="row clearfix">
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Email Address <i>*</i></div>
                                <div class="field-inner">
                                    <input type="email" name="email" value="" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Current Location <i>*</i></div>
                                <div class="field-inner">
                                    <input type="text" name="current" value="" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Destination <i>*</i></div>
                                <div class="field-inner">
                                    <input type="text" name="dest" value="" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Date of Departure <i>*</i></div>
                                <div class="field-inner">
                                    <input type="date" name="depart" class="form-control" value="" placeholder="" required>
                                </div>
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Date of Returning <i>*</i></div>
                                <div class="field-inner">
                                    <input type="date"  name="returning" class="form-control" value="" placeholder="">
                                    
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Number of Adult <i>*</i></div>
                                <div class="field-inner">
                                    <input type="text" name="noofadult" value="" placeholder="">
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Number of Children <i>*</i></div>
                                <div class="field-inner">
                                    <input type="text" name="noofchildren" value="" placeholder="">
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Flight Class <i>*</i></div>
                                <div class="field-inner">
                                    <select name="class">
                                        <option disabled>Select from the above</option>
                                        <option>Economy</option>
                                        <option>Business Class</option>
                                        <option>Premium</option>
                                        <option>First Class</option>
                                    </select>
                                    <span class="alt-icon far fa-angle-down"></span>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Trip Type <i>*</i></div>
                                <div class="field-inner">
                                    <select name="tripoftype">
                                        <option disabled>Select from the above</option>
                                        <option>One way</option>
                                        <option>Round Trip</option>
                                        <option>Multi City</option>
                                    </select>
                                    <span class="alt-icon far fa-angle-down"></span>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                
                                <div class="rates clearfix" hidden>
                                    <div class="rate-block">Per Adult: <span class="price" name="adultcost" value="120">$120</span></div>
                                    <div class="rate-block">Per Children: <span class="price" name="childrencost" value="50">$50</span></div>
                                    <div class="rate-block">Per Children: <span class="price" name="total">$0.00</span></div>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="theme-btn btn-style-two"><span>Submit Now<i class="icon far fa-angle-right"></i></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@include('footer')
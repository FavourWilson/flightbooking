@include('header')
 <!-- Banner Section -->
 <section class="inner-banner">
        <div class="image-layer" style="background-image: url(images/background/banner-image-1.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h2>Cost For Flight</h2>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><span class="icon-home fa fa-home"></span><a href="index.html">Home</a></li>
                        <li class="current">Flight Cost</li>
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
                    <form>
                    
                        <div class="row clearfix">
                           
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                
                                <div class="rates clearfix" hidden>
                                    <div class="rate-block">Per Adult: <span class="price" name="adultcost" value="120">$120</span></div>
                                    <div class="rate-block">Per Children: <span class="price" name="childrencost" value="50">$50</span></div>
                                    <div class="rate-block">Per Children: <span class="price" name="total">{{$data->cost}}</span></div>
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
@include('header')
<!-- Banner Section -->
<section class="inner-banner">
        <div class="image-layer" style="background-image: url(images/background/banner-image-1.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h2>Sign Up</h2>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><span class="icon-home fa fa-home"></span><a href="{{url('welcome')}}">Home</a></li>
                        <li class="current">Sign Up</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Sign Up Section-->
    <section class="signup-section">
        <div class="auto-container">
            <div class="form-box site-form">
                <div class="signup-form">
                    <h5>Sign Up</h5>
                    <form method="post" action="contact.html">
                        <div class="row clearfix">
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="f-label">User Name <i>*</i></div>
                                <div class="field-inner">
                                    <input type="text" name="fieldname" value="" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="f-label">Email Address <i>*</i></div>
                                <div class="field-inner">
                                    <input type="email" name="fieldname" value="" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="f-label">Password <i>*</i></div>
                                <div class="field-inner">
                                    <input type="password" name="fieldname" value="" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="f-label">Re-Enter Password <i>*</i></div>
                                <div class="field-inner">
                                    <input type="password" name="fieldname" value="" placeholder="" required>
                                </div>
                            </div>
                            
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="theme-btn btn-style-two"><span>Sign Up<i class="icon far fa-angle-right"></i></span></button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="lower-link">Already have an account? <a href="login.html">Login In</a></div>
            </div>
        </div>
    </section>
@include('footer')
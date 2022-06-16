@include('header')
 <!-- Banner Section -->
 <section class="inner-banner">
        <div class="image-layer" style="background-image: url(images/background/banner-image-1.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h2>Login In</h2>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><span class="icon-home fa fa-home"></span><a href="{{url('welcome')}}">Home</a></li>
                        <li class="current">Login In</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Login Section-->
    <section class="login-section">
        <div class="auto-container">
            <div class="form-box site-form">
                <div class="login-form">
                    <h5>Login In</h5>
                    <form method="post" action="{{url('login')}}">
                    {{ csrf_field() }}
                        <div class="row clearfix">
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="f-label">Email Address <i>*</i></div>
                                <div class="field-inner">
                                    <input type="email" name="email" value="" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="f-label">Password <i>*</i></div>
                                <div class="field-inner">
                                    <input type="password" name="password" value="" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="field-inner clearfix">
                                    <div class="remember">
                                        <div class="check-block">
                                            <input type="checkbox" name="fieldname" id="check-1">
                                            <label for="check-1">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="forgot-pass">
                                        <a href="reset-password_2.html">Forgot your password? </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="theme-btn btn-style-two"><span>Login In<i class="icon far fa-angle-right"></i></span></button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="lower-link">Don't have a account? <a href="{{url('signup')}}">Sign Up</a> Now</div>
            </div>
        </div>
    </section>

@include('footer')
@include('header')

  <!-- Banner Section -->
  <section class="banner-section">
        
        <div class="banner-container">
            <div class="banner-slider-box">
                <!--Slide Item-->
                <div class="slide-item">
                    <div class="auto-container">
                      <div class="content-box">
                            <div class="content">
                                <div class="clearfix">
                                    <div class="inner">
                                        <div class="bg-image"><img src="{{asset('images/main-slider/banner-bg-text.svg')}}" alt="" title=""></div>
                                        <h2>Never Stop</h2>
                                        <h1><span>Exploring</span></h1>
                                        <div class="text">Their house is a museum where people come to see ‘em. They really are a scream the Addams Family. These days are all Happy and Free. These days are all share them with me oh baby.</div>
                                        <div class="links-box clearfix">
                                            <div class="link"><a href="#" class="theme-btn btn-style-one"><span>View All Tours<i class="icon"><img src="images/icons/logo-icon.svg" alt="" title=""></i></span></a></div>
                                            <div class="link"><a href="https://www.youtube.com/watch?v=0xhr0j877bI" class="theme-btn lightbox-image"><i class="ripple"></i><span class="icon"><img src="images/icons/video-icon-1.svg" alt="" title=""></span></a></div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="banner-image">
                                <div class="image"><img src="{{asset('images/main-slider/banner-image-1.svg')}}" alt="" title=""></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--About Us Section-->
    <section class="about-us">
        <div class="floated-icon right"><img src="{{asset('images/resource/about-stone-right.svg')}}" alt="" title=""></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Col-->
                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="title-box">
                            <div class="subtitle">About Treker</div>
                            <h2><i class="bg-vector"></i><span>World Best Travel Agency</span></h2>
                            <div class="text">Since 2014, we’ve helped more than 500,000 people of all ages enjoy the best outdoor experience of their lives. Whether it’s for one day or a two-week vacation, close to home or a foreign land.</div>
                        </div>
                        <!-- <div class="lower-box">
                            <div class="lower-inner clearfix">
                                <div class="text-content">
                                    <ul>
                                        <li>Ratione voluptatem.sequi nesciunt.</li>
                                        <li>Ratione voluptatem.</li>
                                        <li>Ratione voluptatem sequi.</li>
                                    </ul>
                                </div>
                                <div class="image-box">
                                    <img src="{{asset('images/resource/about-image-2.jpg')}}" alt="" title="">
                                    <a href="https://www.youtube.com/watch?v=0xhr0j877bI" class="theme-btn lightbox-image overlink"><span class="icon fa fa-play"></span></a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!--Image Col-->
                <div class="image-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="bg-image">
                            <img src="{{asset('images/resource/about-vector-1.png')}}" alt="" title="">
                        </div>
                        <div class="image-box">
                            <img src="{{asset('images/resource/about-image-1.svg')}}" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@include('footer')
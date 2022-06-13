<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Treker - Home 01</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]--> 

</head>

<body>
  <div class="page-wrapper"> 
  
    <!-- Preloader -->
    <div class="preloader"></div> 
	
    <div class="search-backdrop"></div>
	
    <!-- Main Header-->
    <header class="main-header">
        <div class="header-top">
            <div class="auto-container">
                <div class="inner clearfix">
                    <div class="top-left clearfix">
                        <ul class="info clearfix">
                            <li><i class="icon fa fa-envelope"></i> <a href="mailto:INFO@TREKER.COM">INFO@TREKER.COM</a></li>
                            <li><i class="icon fa fa-phone-circle"></i> <a href="tel:+11256326501">+11 256 3265 01</a></li>
                        </ul>
                    </div>
                    <div class="top-right clearfix">
                        <div class="lang-box">
                            <div class="lang-btn clearfix"><span class="img far fa-globe-americas"></span><span class="txt">Eng</span><span class="icon far fa-angle-down"></span></div>
                            <ul class="lang-list">
                                <li><a href="#">Tur</a></li>
                                <li><a href="#">Esp</a></li>
                                <li><a href="#">Rus</a></li>
                            </ul>
                        </div>
                        <div class="login"><i class="icon fa fa-user"></i> <a href="{{url('login')}}">SIGN IN</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Upper -->
        <div class="header-upper">        
            <div class="auto-container">
                <!-- Main Box -->
                <div class="main-box clearfix">
                    <!--Logo-->
                    <div class="logo-box">
                         <div class="logo"><a href="{{url('index')}}" title="Treker"><img src="{{asset('images/logo.svg')}}" alt="" title="Treker"></a></div>
                    </div>

                    <div class="nav-box clearfix">
                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">         
                            <nav class="main-menu">
                                <ul class="navigation clearfix">
                                    <li><a href="{{url('welcome')}}">Home</a>
                                       
                                    </li>
                                    <li><a href="{{url('about')}}">About Us</a>
                                       
                                    </li>
                                   
                                    <li><a href="{{url('destination')}}">Destinations</a></li>
                                    <li><a href="{{url('booking')}}">Booking</a></li>
                                    <li><a href="{{url('terms')}}">Terms and Condition</a></li>
                                    <li><a href="{{url('faq')}}">FAQ</a></li>
                                    <li><a href="{{url('contact')}}">Contact</a></li>
                                </ul>
                            </nav>
                            <!-- Main Menu End-->
                        </div>
                        <!--Nav Outer End-->


                </div>
            </div>
        </div>
    </header>

     <!--Search Backdrop-->
     <div class="search-backdrop"></div>
		
        <!-- Menu Backdrop -->
        <div class="menu-backdrop"></div>
    
        <!-- Hidden Navigation Bar -->
        <section class="hidden-bar">
            <!-- Hidden Bar Wrapper -->
            <div class="hidden-bar-wrapper">
                <div class="hidden-bar-closer"><span class="icon"><svg class="icon-close" role="presentation" viewBox="0 0 16 14"><path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path></svg></span></div>
                <div class="nav-logo-box">
                    <div class="logo"><a href="index.html" title="Treker"><img src="images/logo.svg" alt="" title="Treker"></a></div>
                </div>
                <!-- .Side-menu -->
                <div class="side-menu">
                     <ul class="navigation clearfix">
                     <li><a href="{{url('welcome')}}">Home</a>
                                       
                                       </li>
                                       <li><a href="{{url('about')}}">About Us</a>
                                          
                                       </li>
                                      
                                       <li><a href="{{url('destination')}}">Destinations</a></li>
                                       <li><a href="{{url('booking')}}">Booking</a></li>
                                       <li><a href="{{url('terms')}}">Terms and Condition</a></li>
                                       <li><a href="{{url('faq')}}">FAQ</a></li>
                                       <li><a href="{{url('contact')}}">Contact</a></li>
                    </ul>
                </div><!-- /.Side-menu -->
                
                <div class="links-box clearfix">
                    <div class="clearfix">
                        <div class="link"><a href="{{url('login')}}" class="theme-btn btn-style-one"><span>Login<i class="icon far fa-angle-right"></i></span></a></div>
                        <div class="link"><a href="{{url('signup')}}" class="theme-btn btn-style-two"><span>Sign Up<i class="icon far fa-angle-right"></i></span></a></div>
                    </div>
                </div>
            
            </div><!-- / Hidden Bar Wrapper -->
        </section>
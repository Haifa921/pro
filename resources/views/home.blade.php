<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fix it</title>

       
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script src="js/jquery-1.6.3.min.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/NewsGoth_BT_400.font.js"></script>
<script src="js/FF-cash.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/easyTooltip.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
    </head>
    <body class="antialiased">
           
            <div class="extra">
  <div class="main">
    <!--==============================header=================================-->
    <header>
      <div class="indent">
        <div class="row-top">
          <div class="wrapper">
            <h1><a href="index.html">Fix it</a></h1>
            <strong class="support">+1 959-456-7856</strong> </div>
       
        </div>
      
        <nav>
          <ul class="menu">
            <li><a class="active" href="{{ url('/') }}">home</a></li>
            <li><a href="{{ url('/posts') }}">addservice</a></li>
            <li><a href="{{ url('/staff') }}">staff</a></li>
            
            <li class="last"><a href="{{ url('/contact') }}">contact</a></li>
            @if (Route::has('login'))
            @auth
            <li><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div></li>
            @else
            <li><a href="{{ route('login') }}">login</a></li>
            @if (Route::has('register'))
            <li class="last"><a href="{{ route('register') }}">register</a></li>
            @endif
                    @endauth
          </ul>
          @endif
        </nav>
      </div>
      <div class="wrapper">
        <div class="slider">
          <ul class="items">
            <li><img src="images/slider-img1.jpg" alt=""></li>
            <li><img src="images/slider-img2.jpg" alt=""></li>
            <li><img src="images/slider-img3.jpg" alt=""></li>
          </ul>
        </div>
        <a class="prev">prev</a> <a class="next">next</a>
        <div class="banner1-bg"></div>
        <div class="banner-1"></div>
      </div>
    </header>
    <!--==============================aside================================-->
    <aside>
      <div class="wrapper">
        <div class="column-1">
          <div class="box">
            <div class="aligncenter">
              <h4>Electrical Services</h4>
            </div>
            <div class="box-bg maxheight">
              <div class="padding">
                <h6 class="color-1">Sed ut perspiciatis unde omnis</h6>
                <p>Linior voluptatm accusantium doloremque laudantium totarem aperiam.</p>
              </div>
              <div class="aligncenter"> <a class="button" href="#">More Details</a> </div>
            </div>
          </div>
        </div>
        <div class="column-1">
          <div class="box">
            <div class="aligncenter">
              <h4>Plumbing Services</h4>
            </div>
            <div class="box-bg maxheight">
              <div class="padding">
                <h6 class="color-1">Quasi architecto beatae vitae</h6>
                <p>Nemenim ipsam voluptatem quia voluptas aspernatur odit aut fugit.</p>
              </div>
              <div class="aligncenter"> <a class="button" href="#">More Details</a> </div>
            </div>
          </div>
        </div>
        <div class="column-2">
          <div class="box">
            <div class="aligncenter">
              <h4>Welding Services</h4>
            </div>
            <div class="box-bg maxheight">
              <div class="padding">
                <h6 class="color-1">Sed quia consequuntur magni</h6>
                <p>Doloresqui ratione voluptatem sequi neunt Neque porro quisquam dolorem.</p>
              </div>
              <div class="aligncenter"> <a class="button" href="#">More Details</a> </div>
            </div>
          </div>
        </div>
      </div>
    </aside>
    <!--==============================content================================-->
   
    <section id="content">
      <div class="wrapper">
        <article class="col-1">
          <div class="indent-left">
            <h2>Welcome!</h2>
            <h6 class="prev-indent-bot">Fix it is one of free website templates created by TemplateMonster.com</h6>
            <p class="prev-indent-bot">This website template is optimized for 1280X1024 screen resolution. It is also XHTML &amp; CSS valid. Handyman Template goes with two packages – with PSD source files and without them. PSD<br>
              source files are available for free for the registered members of Templates.com. The basic pack<br>
              age (without PSD source) is available for anyone without registration.</p>
            This website template has several pages: <a class="color-2" href="index.html">Home Page</a>, <a class="color-2" href="services.html">Services</a>, <a class="color-2" href="faq.html">FAQ</a>, <a class="color-2" href="prices.html">Prices</a>, <a class="color-2" href="staff.html">Our Staff</a>, <a class="color-2" href="contacts.html">Contacts</a> (note that contact us form – doesn’t work). </div>
        </article>
        <article class="col-2">
          <h3>Testimonials</h3>
          <div class="wrapper indent-bot">
            <figure class="img-indent"><img src="images/page1-img1.jpg" alt=""></figure>
            <div class="extra-wrap text-1">
              <div class="margin-top">
                <h6><a class="link color-2" href="#">James Williams</a></h6>
                Lorem ipsum dolor sitmet consectetur adipisicing elit sed do eiusmod. </div>
            </div>
          </div>
          <div class="wrapper">
            <figure class="img-indent"><img src="images/page1-img2.jpg" alt=""></figure>
            <div class="extra-wrap text-1">
              <div class="margin-top">
                <h6><a class="link color-2" href="#">Thomas Seether</a></h6>
                Tempor incididunt utlabore et dolore magna aliqua ut enim ad minim veniam. </div>
            </div>
          </div>
        </article>
      </div>
      <div class="block"></div>
    </section>
  </div>
</div>

<br>
<!--==============================footer=================================-->
<footer>
  <div class="main">
    <div class="footer-bg">
      <p class="prev-indent-bot">Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved | Design by <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a></p>
      <ul class="list-services">
        <li><a class="tooltips" href="#"></a></li>
        <li class="item-1"><a class="tooltips" href="#"></a></li>
        <li class="item-2"><a class="tooltips" href="#"></a></li>
      </ul>
    </div>
  </div>
</footer>
<script>Cufon.now();</script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        duration: 800,
        easing: 'easeOutQuart',
        preset: 'simpleFade',
        slideshow: 7000,
        banners: false,
        pauseOnHover: true,
        waitBannerAnimation: false,
        prevBu: '.prev',
        nextBu: '.next'
    });
});
</script>
    </body>
</html>

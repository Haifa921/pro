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
            <li><a class="active" href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/posts') }}">Add Services</a></li>
            <li><a href="{{ url('/staff') }}">Staff</a></li>
            
            <li class="last"><a href="{{ url('/contact') }}">Contacts</a></li>
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
    </header>
    <!--==============================content================================-->
    <section id="content">
      <div class="wrapper">
        <article class="col-1">
          <div class="indent-left">
            <h3 class="p1">Contact Form</h3>
            <form id="contact-form" action="#" method="post" enctype="multipart/form-data">
              <fieldset>
                <label><span class="text-form">Full Name:</span>
                  <input type="text">
                </label>
                <label><span class="text-form">E-mail:</span>
                  <input type="text">
                </label>
                <label><span class="text-form">Telephone:</span>
                  <input type="text">
                </label>
                <div class="wrapper">
                  <div class="text-form">Message:</div>
                  <div class="extra-wrap">
                    <textarea></textarea>
                  </div>
                </div>
                <div class="buttons"> <a class="button-2" href="#">Clear</a> <a class="button-2" href="#">Send</a> </div>
              </fieldset>
            </form>
          </div>
        </article>
        <article class="col-2">
          <h3 class="p1">Our Contacts</h3>
          <h6>USA</h6>
          <dl class="img-indent-bot">
            <dt>8901 Marmora Road, Glasgow, D04</dt>
            <dd><span>Telephone:</span><strong>+1 959 603 6035</strong></dd>
            <dd><span>Fax:</span><strong>+1 504 889 9898</strong></dd>
            <dd><span>Email:</span><strong><a href="#">mail@thomsander.com</a></strong></dd>
          </dl>
          <h6>Canada</h6>
          <dl class="img-indent-bot">
            <dt>8901 Marmora Road, Glasgow, D04</dt>
            <dd><span>Telephone:</span><strong>+1 959 603 6035</strong></dd>
            <dd><span>Fax:</span><strong>+1 504 889 9898</strong></dd>
            <dd><span>Email:</span><strong><a href="#">mail@thomsander.com</a></strong></dd>
          </dl>
          <h6>Great Britain</h6>
          <dl>
            <dt>8901 Marmora Road, Glasgow, D04</dt>
            <dd><span>Telephone:</span><strong>+1 959 603 6035</strong></dd>
            <dd><span>Fax:</span><strong>+1 504 889 9898</strong></dd>
            <dd><span>Email:</span><strong><a href="#">mail@thomsander.com</a></strong></dd>
          </dl>
        </article>
      </div>
      <div class="block"></div>
    </section>
  </div>
</div>
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
<!--coded by cheh-->
</body>
</html>

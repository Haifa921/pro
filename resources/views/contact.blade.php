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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>

<body class="antialiased">

  <div class="extra">
    <div class="main ">
      <!--==============================header=================================-->
      <header>
        <div class="indent">
          <div class="row-top">
            <div class="wrapper">
              <h1><a href="index.html">Fix it</a></h1>
              <strong class="support">+1 959-456-7856</strong>
            </div>

          </div>

          <nav>
            <ul class="menu">
              <li><a class="active" href="{{ url('/home') }}">Home</a></li>
              <li><a href="{{ url('/posts') }}">Add Services</a></li>
              <li><a href="{{ url('/staff') }}">Staff</a></li>

              <li class=""><a href="{{ url('/contact') }}">Contacts</a></li>
              @if (Route::has('login'))
              @auth
              <li><a href="#">
                  {{ Auth::user()->name }}
                </a>
              </li>
              <li class="last">
                <div>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </li>
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
      <div class="mx-5">
        <!--==============================content================================-->
        <section id="content">
          <div class="wrapper row">
            <article class="col-1 col-md-8">
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
                    <div class="buttons row "> 
                      <a class="button-2" href="#">Clear</a> 
                      <a class="button-2" href="#">Send</a> 
                    </div>
                  </fieldset>
                </form>
              </div>
            </article>
            <article class="col-2 col-md-4">
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
    </div>
  </div>

</body>

</html>
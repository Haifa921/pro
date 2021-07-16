<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fix it | Staff</title>
  <meta charset="utf-8">
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

</head>

<body id="page5">
  <div class="extra">
    <div class="main">
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
              <li><a class="active" href="{{route('home')}}">Home</a></li>
              <li><a href="{{ url('/posts') }}">Add Services</a></li>
              <li><a href="{{ url('/staff') }}">Staff</a></li>

              <li><a href="{{ url('/contact') }}">Contacts</a></li>
              @if (Route::has('login'))
              <!-- @auth
              <li class="last"><a href="{{ url('/home') }}">Home</a></li> -->
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
      <div class="mx-5">
        <!--==============================aside================================-->
        <aside>
          <div class="wrapper">
            <div class="column-1">
              <div class="box">
                <div class="aligncenter">
                  <h4>Thomas Seether</h4>
                </div>
                <div class="box-bg maxheight">
                  <div class="padding">
                    <figure class="p2"><img src="images/page5-img2.jpg" alt=""></figure>
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
                  <h4>James Williams</h4>
                </div>
                <div class="box-bg maxheight">
                  <div class="padding">
                    <figure class="p2"><img src="images/page5-img3.jpg" alt=""></figure>
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
                  <h4>Markus Pumper</h4>
                </div>
                <div class="box-bg maxheight">
                  <div class="padding">
                    <figure class="p2"><img src="images/page5-img4.jpg" alt=""></figure>
                    <h6 class="color-1">Sed quia consequuntur magni</h6>
                    <p>Doloresqui ratione voluptatem sequi neunt Neque porro quisquam dolorem.</p>
                  </div>
                  <div class="aligncenter"> <a class="button" href="#">More Details</a> </div>
                </div>
              </div>
            </div>
          </div>
        </aside>

        <section id="container">
          <div class="">
            <h3 class="p1">About Our Staff</h3>
            <div class="wrapper">
              <figure class="img-indent"><img src="images/page5-img1.jpg" alt=""></figure>
              <div class="extra-wrap">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</p>
                <a class="button-2" href="#">Read More</a>
              </div>
            </div>
          </div>
        </section>
        <div class="block"></div>

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
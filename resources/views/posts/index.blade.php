<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Fix it</title>


  <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}">
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
    <div class="main">
      <div class='content-holder'>

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
                <li><a class="active" href="{{ url('/home') }}">home</a></li>
                <li><a href="{{ url('/posts') }}">addservice</a></li>
                <li><a href="{{ url('/staff') }}">Staff</a></li>

                <li><a href="{{ url('/contact') }}">Contact</a></li>
                @if (Route::has('login'))
                @auth
                <li><a href="#" role="button">
                    {{ Auth::user()->name }}
                  </a>
                </li>
                <li class="last">

                  <div>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
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
        <div class="container">

          <div class="jumbotron ">
            <div class="row" style="align-items: center;">
              <div class="col-md-8">
                <div class="display-4" style="margin-bottom: .6rem;">All services </div>
              </div>

              <!-- search  -->
              <div class="col-md-4">
                <div class="">
                  <div>
                    <form action="{{ url('/search') }}" method="get">
                      <div class="form-group row" style="margin-bottom: 0;">
                        <input type="text" class="form-control typeahead col-md" name="search" placeholder="Enter your search">
                        <button class="btn my-2 my-sm-0 col-sm-1" type="submit"><i class="fa fa-search" aria-hidden="true"></i> </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /search  -->

            </div>
          </div>
        </div>

        <div class="container">
          <!-- Action botttuns  -->
          <div class=" mb-4">
            <a class="btn btn-success" href="{{route('post.create')}}"> create post</a>
            <a class="btn btn-danger" href="{{route('posts.trashed')}}"> Trash <i class="fas fa-trash"></i></a>
          </div>
          <div class="row">
            @if ($posts->count() > 0 )
            <div class="col">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col"> Date</th>
                    <th scope="col">User</th>
                    <th scope="col">content-reigon</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $i = 1;
                  @endphp
                  @foreach ($posts as $item)
                  <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$item->title}}</td>
                    <td>{{$item->created_at->diffForhumans() }}</td>
                    <td>{{$item->user->name}}</td>
                    <td>{{$item->content}}</td>
                    <td>
                      @if($item->photo != null)
                      <img src="{{URL::asset($item->photo)}}" alt="{{$item->photo}}" {{-- <img src="{{$item->photo}}" alt="{{$item->photo}}" --}} class="img-tumbnail" width="100" height="100">
                      @endif
                    </td>
                    <td>
                      <a class="text-success" href="{{route('post.show',['slug'=> $item->slug])}}"> <i class="fas  fa-2x fa-eye"></i> </a>
                      @if ($item->user_id == Auth::id())
                      &nbsp;&nbsp;
                      <a href="{{route('post.edit',['id'=> $item->id])}}"> <i class="fas fa-2x fa-edit"></i> </a>&nbsp;&nbsp;
                      <a class="text-danger" href="{{route('post.destroy',['id'=> $item->id])}}"> <i class="fas  fa-2x fa-trash-alt"></i> </a>
                      @endif

                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>


            </div>
            @else
            <div class="col">
              <div class="alert alert-danger" role="alert">
                Not posts
              </div>
            </div>

            @endif


          </div>
        </div>
      </div>
    </div>

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
  </div>
  </div>




  </footer>
  <script>
    Cufon.now();
  </script>
  <script>
    $(window).load(function() {
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
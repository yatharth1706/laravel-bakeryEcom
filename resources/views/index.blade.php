<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/2f55da0773.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="banner">
      <div class="banner1">
        <div class="banner1-content">
          
          <p>Covered in switness with a touch of joy and</p>
          <p>little bits of love. That's how we bake it.</p>
        </div>
      </div>
      <div class="banner-img">
        <img class="img3" src="{{ asset('img/party.png') }}" alt="" />

        @if (Session::has('username'))
          <div><h1>welcome {{session('username')}}</h1></div>
        @endif

      </div>
      <nav class="nav1 row">
        <div class="col-5 logo-content">
          <p class="logo">Bakery Town</p>
        </div>
        <div class=" nav1-links col-5">
          <a href="index.php" style="color:white">Home</a>
          <a href="" style="color: white">About</a>
          <a href="">Menu</a>
          <a href="">Contact</a>
          @if (Session::has('username'))
          <a href="/logout">Logout</a>
          @else
          <a href="/signup">Signup/Login</a>
          @endif
          
        </div>
        <div class="nav1-cart col-2">
          
          <a href="/cart"><i class="fas fa-shopping-cart"></i></a>
          <a href=""><i class="fas fa-user-circle"></i></a>
        </div>
      </nav>
    </div>

    <!--Menu-->
    <div class="menu-banner"><h1>Products</h1></div>
      

    <div class="jumbotron">
      <div class="row menu-box">
      <div class="col-md-3 col-sm-6 columncard">
        
        <div class="card-holder">
          <div class="imageholder">
            <a href=""><img src="{{ asset('img/Cupcakes.jpg') }}"></a>
          </div>
          <div class="cardbody">
            <button onclick="window.location.href = 'products?item=cupcakes';">CupCakes</button>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 columncard">
        
        <div class="card-holder">
          <div class="imageholder">
            <a href=""><img src="{{ asset('img/Cookies.jpg') }}"></a>
          </div>
          <div class="cardbody">
            <button onclick="window.location.href = 'products?item=cookies';">Cookies</button>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 columncard">
        
        <div class="card-holder">
          <div class="imageholder">
            <a href=""><img src="{{ asset('img/cakes.jpg') }}"></a>
          </div>
          <div class="cardbody">
            <button onclick="window.location.href = 'products?item=cakes';">Cakes</button>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 columncard">
        
        <div class="card-holder">
          <div class="imageholder">
            <a href=""><img src="{{ asset('img/breads.jpg') }}"></a>
          </div>
          <div class="cardbody">
            <button onclick="window.location.href = 'products?item=breads';">Breads</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row pizza-box">
      <div class="col-12 pizza-pic columncard">
        
        <div class="card-holder1">
          <div class="imageholder">
            <a href=""><img src="{{ asset('img/pizza.jpg') }}"></a>
          </div>
          <div class="cardbody">
            <button onclick="window.location.href = 'products?item=pizzas';">Pizza</button>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="jumbotron jumbo2">
    <div class="row menu-box">
      <div class="col-md-3 col-sm-6 columncard">
        
        <div class="card-holder">
          <div class="imageholder">
            <a href=""><img src="{{ asset('img/pudding.jpg') }}"></a>
          </div>
          <div class="cardbody">
            <button onclick="window.location.href = 'products?item=puddings';">Puddings</button>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 columncard">
        
        <div class="card-holder">
          <div class="imageholder">
            <a href=""><img src="{{ asset('img/jam.jpg') }}"></a>
          </div>
          <div class="cardbody">
            <button onclick="window.location.href = 'products?item=jams';">Jams</button>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 columncard">
        
        <div class="card-holder">
          <div class="imageholder">
            <a href=""><img src="{{ asset('img/pickle.jpg') }}"></a>
          </div>
          <div class="cardbody">
            <button onclick="window.location.href = 'products?item=pickles';">Pickles</button>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 columncard">
        
        <div class="card-holder">
          <div class="imageholder">
            <a href=""><img src="{{ asset('img/decoration.jpg') }}"></a>
          </div>
          <div class="cardbody">
            <button onclick="window.location.href = 'products?item=decoration';">Decoration</button>
          </div>
        </div>
      </div>
    </div>

    <h3 class="text-center features">FEATURES</h3>
    <div class="icon-outercontainer">
      <div class="icons-container">
        <div class="icon1">
          <img class="icon" src="{{ asset('img/24hrs.png') }}" alt="24hrs" />
          <p>24 Hrs Available</p>
        </div>
        <div class="icon1">
          <img class="icon" src="../img/pizza-icon.png" alt="pizza" />
          <p>Unlimited Pizza on Fridays</p>
        </div>
        <div class="icon1">
          <img class="icon" src="{{ asset('img/cash.png') }}" alt="cashback" />
          <p>Cashback 100% if not satisfied</p>
        </div>
        <div class="icon1">
          <img class="icon" src="{{ asset('img/fast.png') }}" alt="fast-delivery" />
          <p>Fast Delivery</p>
        </div>
      </div>
    </div>
    </div>

     <div class="container-fluid footer">
        <div class="links">
          <a href="">Home</a>
          <a href="">About</a>
          <a href="">Contact US</a>
          <a href="">Products</a>
        </div>

        <div class="social-links">
          <i class="fa fa-github" aria-hidden="true"></i>
          <i class="fa fa-facebook-official" aria-hidden="true"></i>
          <i class="fa fa-google-plus-official" aria-hidden="true"></i>
          <i class="fa fa-twitter" aria-hidden="true"></i>

        </div>
     </div>
    
  </body>
</html>

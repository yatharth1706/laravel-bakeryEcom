<!DOCTYPE html>
<html>
<head>
  <title></title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="{{asset('css/include.css')}}" media="all"/>
    <script
      src="https://kit.fontawesome.com/2f55da0773.js"
      crossorigin="anonymous"
    ></script>
</head>
<body>
  <nav class="nav1 row">
        <div class="col-5 logo-content">
          <p class="logo">Bakery Town</p>
        </div>
        <div class=" nav1-links col-5">
          <a href="../template/index.php">Home</a>
          <a href="#">About</a>
          <a href="#">Menu</a>
          <a href="#">Contact</a>
        </div>
        <div class="nav1-cart col-2">
          <a href="#"><i class="fas fa-shopping-cart"></i></a>
          <a href=""><i class="fas fa-user-circle"></i></a>
        </div>
  </nav>
   @yield('content')



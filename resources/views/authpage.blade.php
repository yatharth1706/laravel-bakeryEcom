<<<<<<< HEAD



=======
>>>>>>> 407a753755681bd5e74e117260c5128677ad6e67
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
<<<<<<< HEAD
    <link rel="stylesheet" href="{{asset('css/authpage.css')}}" media="all"/>
  
  </head>
  <body>
  
=======
    <link rel="stylesheet" href="../css/authpage.css?v=<?php echo time()?>" media="all"/>
  
  </head>
  <body>
    @extends('layouts.layout')

    @section('content')
>>>>>>> 407a753755681bd5e74e117260c5128677ad6e67
    <div class="wrapper">

      <div class="first"></div>
      <div class="second"></div>
      <div class="form-box">
        <!--signup-->
        <div class="signup">
         
          <button class="signup-heading">SIGN UP</button>
<<<<<<< HEAD
          <form action="userdetail" method="post">
             @csrf
            <div>
              <label for="">Username:</label><span class="error">@error('username'){{$message}}@enderror</span>
              <br />
=======
          <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            <div>
              <label for="">Username:</label>
              <span class="error"><br />
>>>>>>> 407a753755681bd5e74e117260c5128677ad6e67
              <input
                type="text"
                name="username"
                placeholder="please enter your username"
<<<<<<< HEAD
                value=""
=======
>>>>>>> 407a753755681bd5e74e117260c5128677ad6e67
              />
            </div>
            <div>
              <label for="email">Email:</label
<<<<<<< HEAD
              ><span class="error">@error('email'){{$message}}@enderror</span><br />
=======
              ><span class="error"></span><br />
>>>>>>> 407a753755681bd5e74e117260c5128677ad6e67
              <input
                type="text"
                name="email"
                placeholder="please enter your email"
<<<<<<< HEAD
                value=""
              />
            </div>
            <div>
              <label for="">Password:</label><span class="error">@error('password'){{$message}}@enderror</span>
             <br />
=======
              />
            </div>
            <div>
              <label for="">Password:</label>
              <span class="error"></span><br />
>>>>>>> 407a753755681bd5e74e117260c5128677ad6e67
              <input
                type="password"
                name="password"
                placeholder="please enter your password"
<<<<<<< HEAD
                value=""
=======
        
>>>>>>> 407a753755681bd5e74e117260c5128677ad6e67
              />
            </div>
            <div>
              <label for="">Confirm Password:</label
<<<<<<< HEAD
              ><span class="error">@error('conpassword'){{$message}}@enderror</span><br />
=======
              ><br />
>>>>>>> 407a753755681bd5e74e117260c5128677ad6e67
              <input
                type="password"
                name="conpassword"
                placeholder="confirm your password"
<<<<<<< HEAD
                value=""
=======
                >"
>>>>>>> 407a753755681bd5e74e117260c5128677ad6e67
              />
            </div>
            <div class="signup-button">
              <button class="btn btn-success btn-block" type="submit">
                submit
              </button>
            </div>
<<<<<<< HEAD
            @if(session('successSignup'))
            <div><p class="success">{{session('successSignup')}}</p></div>
            @endif
=======
            <p class="error"></p>
>>>>>>> 407a753755681bd5e74e117260c5128677ad6e67
          </form>
        </div>

        

        <div class="switcher">
          <div class="login-switcher">
            <p>If you have existing account</p>
<<<<<<< HEAD
            <button ><a href="{{url('login')}}">LOG IN</a>  </button>
=======
            <button > <a href="loginpage.php">LOG IN</a>  </button>
>>>>>>> 407a753755681bd5e74e117260c5128677ad6e67
          </div>
          
        </div>
      </div>
    </div>
<<<<<<< HEAD
    
=======
    <!-- <script type="text/javascript" src="../js/authpage.js"></script> -->
    @endsection
>>>>>>> 407a753755681bd5e74e117260c5128677ad6e67
  </body>
</html>
